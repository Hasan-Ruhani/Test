<?php
const theta_spacing = 0.07;
const phi_spacing   = 0.02;

const R1 = 1;
const R2 = 2;
const K2 = 5;

// screen size
$screen_width = 80;
$screen_height = 24;

// Calculate K1 based on screen size
$K1 = $screen_width * $K2 * 3 / (8 * ($R1 + $R2));

function render_frame($A, $B) {
  // precompute sines and cosines of A and B
  $cosA = cos($A);
  $sinA = sin($A);
  $cosB = cos($B);
  $sinB = sin($B);

  $output = [];
  $zbuffer = [];

  // initialize the arrays
  for ($i = 0; $i < $screen_width; $i++) {
    $output[$i] = array_fill(0, $screen_height, ' ');
    $zbuffer[$i] = array_fill(0, $screen_height, 0);
  }

  // theta goes around the cross-sectional circle of a torus
  for ($theta = 0; $theta < 2 * M_PI; $theta += theta_spacing) {
    // precompute sines and cosines of theta
    $costheta = cos($theta);
    $sintheta = sin($theta);

    // phi goes around the center of revolution of a torus
    for ($phi = 0; $phi < 2 * M_PI; $phi += phi_spacing) {
      // precompute sines and cosines of phi
      $cosphi = cos($phi);
      $sinphi = sin($phi);

      // the x,y coordinate of the circle, before revolving (factored
      // out of the above equations)
      $circlex = $R2 + $R1 * $costheta;
      $circley = $R1 * $sintheta;

      // final 3D (x,y,z) coordinate after rotations, directly from
      // our math above
      $x = $circlex * ($cosB * $cosphi + $sinA * $sinB * $sinphi) - $circley * $cosA * $sinB;
      $y = $circlex * ($sinB * $cosphi - $sinA * $cosB * $sinphi) + $circley * $cosA * $cosB;
      $z = $K2 + $cosA * $circlex * $sinphi + $circley * $sinA;
      $ooz = 1 / $z;  // "one over z"

      // x and y projection.  note that y is negated here, because y
      // goes up in 3D space but down on 2D displays.
      $xp = (int) ($screen_width / 2 + $K1 * $ooz * $x);
      $yp = (int) ($screen_height / 2 - $K1 * $ooz * $y);

      // calculate luminance.  ugly, but correct.
      $L = $cosphi * $costheta * $sinB - $cosA * $costheta * $sinphi - $sinA * $sintheta + $cosB * ($cosA * $sintheta - $costheta * $sinA * $sinphi);
      // L ranges from -sqrt(2) to +sqrt(2). 
