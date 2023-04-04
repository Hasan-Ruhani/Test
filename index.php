<!DOCTYPE html>
<html>
  <head>
    <title>Watch Example</title>
    <style>
      .watch {
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-color: #f7f7f7;
        box-shadow: inset 0 0 10px rgba(0,0,0,0.2);
      }

      .circle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: black;
      }

      .hour-hand,
      .minute-hand,
      .second-hand {
        position: absolute;
        top: 50%;
        left: 50%;
        transform-origin: bottom center;
        background-color: black;
      }

      .hour-hand {
        width: 6px;
        height: 50px;
        transform: translate(-3px, -25px) rotate(30deg);
      }

      .minute-hand {
        width: 4px;
        height: 75px;
        transform: translate(-2px, -37.5px) rotate(45deg);
      }

      .second-hand {
        width: 2px;
        height: 100px;
        transform: translate(-1px, -50px) rotate(60deg);
        animation-name: rotate;
        animation-duration: 10s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
      }

      @keyframes rotate {
        from {
          transform: translate(-1px, -50px) rotate(60deg);
        }
        to {
          transform: translate(-1px, -50px) rotate(420deg);
        }
      }
    </style>
  </head>
  <body>
    <div class="watch">
      <div class="circle"></div>
      <div class="hour-hand"></div>
      <div class="minute-hand"></div>
      <div class="second-hand"></div>
    </div>
  </body>
</html>
