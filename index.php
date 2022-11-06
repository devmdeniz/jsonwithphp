<h1 style="text-align: center">Fan Control</h1>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Range Slider</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <title></title>
    <script type="text/javascript" src="/scripts/jquery-1.10.2.min.js"></script>

    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body {
        background-color: #3264fe;
      }
      .container {
        background-color: #ffffff;
        width: 70vmin;
        transform: translate(-30%, -30%);
        top: 10%;
        left: 10%;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 6px 4px;
        border-radius: 1px;
      }
      input[type="range"] {
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        display: block;
        width: 80%;
        height: 8px;
        background-color: #d5d5d5;
        border-radius: 8px;
        outline: none;
      }
      input[type="range"]::-webkit-slider-runnable-track {
        -webkit-appearance: none;
        height: 8px;
      }
      input[type="range"]::-moz-track {
        -moz-appearance: none;
        height: 8px;
      }
      input[type="range"]::-ms-track {
        appearance: none;
        height: 8px;
      }
      input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]::-moz-range-thumb {
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]::-ms-thumb {
        appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]:active::-webkit-slider-thumb {
        background-color: #ffffff;
        border: 3px solid #3264fe;
      }
      #slider-value {
        width: 13%;
        position: relative;
        background-color: #3264fe;
        color: #ffffff;
        text-align: center;
        font-family: "Roboto Mono", monospace;
        padding: 10px 0;
        border-radius: 5px;
      }
      .container1 {
        background-color: #ffffff;
        width: 70vmin;
        transform: translate(-30%, -30%);
        top: 20%;
        left: 10%;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 3px 4px;
        border-radius: 1px;
      }
      input[type="range"] {
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        display: block;
        width: 80%;
        height: 8px;
        background-color: #d5d5d5;
        border-radius: 5px;
        outline: none;
      }
      input[type="range"]::-webkit-slider-runnable-track {
        -webkit-appearance: none;
        height: 8px;
      }
      input[type="range"]::-moz-track {
        -moz-appearance: none;
        height: 8px;
      }
      input[type="range"]::-ms-track {
        appearance: none;
        height: 8px;
      }
      input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]::-moz-range-thumb {
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]::-ms-thumb {
        appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]:active::-webkit-slider-thumb {
        background-color: #ffffff;
        border: 3px solid #3264fe;
      }
      #slider-value1 {
        width: 13%;
        position: relative;
        background-color: #3264fe;
        color: #ffffff;
        text-align: center;
        font-family: "Roboto Mono", monospace;
        padding: 10px 0;
        border-radius: 5px;
      }
      .container2 {
        background-color: #ffffff;
        width: 70vmin;
        transform: translate(-30%, -30%);
        top: 30%;
        left: 10%;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 6px 4px;
        border-radius: 1px;
      }
      input[type="range"] {
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        display: block;
        width: 80%;
        height: 8px;
        background-color: #d5d5d5;
        border-radius: 8px;
        outline: none;
      }
      input[type="range"]::-webkit-slider-runnable-track {
        -webkit-appearance: none;
        height: 8px;
      }
      input[type="range"]::-moz-track {
        -moz-appearance: none;
        height: 8px;
      }
      input[type="range"]::-ms-track {
        appearance: none;
        height: 8px;
      }
      input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]::-moz-range-thumb {
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]::-ms-thumb {
        appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]:active::-webkit-slider-thumb {
        background-color: #ffffff;
        border: 3px solid #3264fe;
      }
      #slider-value2 {
        width: 13%;
        position: relative;
        background-color: #3264fe;
        color: #ffffff;
        text-align: center;
        font-family: "Roboto Mono", monospace;
        padding: 10px 0;
        border-radius: 5px;
      }
      .container3 {
        background-color: #ffffff;
        width: 70vmin;
        transform: translate(-30%, -30%);
        top: 40%;
        left: 10%;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 6px 4px;
        border-radius: 1px;
      }
      input[type="range"] {
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        display: block;
        width: 80%;
        height: 8px;
        background-color: #d5d5d5;
        border-radius: 8px;
        outline: none;
      }
      input[type="range"]::-webkit-slider-runnable-track {
        -webkit-appearance: none;
        height: 8px;
      }
      input[type="range"]::-moz-track {
        -moz-appearance: none;
        height: 8px;
      }
      input[type="range"]::-ms-track {
        appearance: none;
        height: 8px;
      }
      input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]::-moz-range-thumb {
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]::-ms-thumb {
        appearance: none;
        height: 20px;
        width: 20px;
        background-color: #3264fe;
        border-radius: 50%;
        cursor: pointer;
        margin-top: -6px;
        border: none;
      }
      input[type="range"]:active::-webkit-slider-thumb {
        background-color: #ffffff;
        border: 3px solid #3264fe;
      }
      #slider-value3 {
        width: 13%;
        position: relative;
        background-color: #3264fe;
        color: #ffffff;
        text-align: center;
        font-family: "Roboto Mono", monospace;
        padding: 10px 0;
        border-radius: 5px;
      }

      .switch input {
        display: none;
      }

      .switch {
        display: inline-block;
        width: 60px; /*=w*/
        height: 30px; /*=h*/
        left: 40%;
        margin: 8px;
        transform: translateY(50%);
        position: relative;
      }

      .slider {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border-radius: 30px;
        box-shadow: 0 0 0 2px rgb(189, 27, 27), 0 0 4px rgb(189, 27, 27);
        cursor: pointer;
        border: 4px solid transparent;
        overflow: hidden;
        transition: 0.4s;
      }

      .slider:before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        background-color: rgb(189, 27, 27);
        border-radius: 30px;
        transform: translateX(-30px); /*translateX(-(w-h))*/
        transition: 0.4s;
      }

      input:checked + .slider:before {
        transform: translateX(30px); /*translateX(w-h)*/
        background-color: limeGreen;
      }

      input:checked + .slider {
        box-shadow: 0 0 0 2px limeGreen, 0 0 8px limeGreen;
      }
      .switch-text {
        left: 40%;
        margin: 8px;
        position: relative;
      }

      .switch200 .slider:before {
        width: 200%;
        transform: translateX(-82px); /*translateX(-(w-h))*/
      }

      .switch200 input:checked + .slider:before {
        background-color: red;
      }

      .switch200 input:checked + .slider {
        box-shadow: 0 0 0 2px red, 0 0 8px red;
      }
      .push_button {
        position: relative;
        width: 220px;
        height: 40px;
        text-align: center;
        color: #fff;
        text-decoration: none;
        line-height: 43px;
        font-family: "Oswald", Helvetica;
        display: block;
        margin: 325px;
        left: 600px;
      }
      .push_button:before {
        background: #f0f0f0;
        background-image: -webkit-gradient(
          linear,
          0% 0%,
          0% 100%,
          from(#d0d0d0),
          to(#f0f0f0)
        );

        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;

        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5) inset, 0 1px 0 #fff;
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5) inset, 0 1px 0 #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5) inset, 0 1px 0 #fff;

        position: absolute;
        content: "";
        left: -6px;
        right: -6px;
        top: -6px;
        bottom: -10px;
        z-index: -1;
      }

      .push_button:active {
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.5) inset,
          0 -1px 0 rgba(255, 255, 255, 0.1) inset;
        top: 5px;
      }
      .push_button:active:before {
        top: -11px;
        bottom: -5px;
        content: "";
      }

      .red {
        text-shadow: -1px -1px 0 #a84155;
        background: #d25068;
        border: 1px solid #d25068;

        background-image: -webkit-linear-gradient(top, #f66c7b, #d25068);
        background-image: -moz-linear-gradient(top, #f66c7b, #d25068);
        background-image: -ms-linear-gradient(top, #f66c7b, #d25068);
        background-image: -o-linear-gradient(top, #f66c7b, #d25068);
        background-image: linear-gradient(to bottom, #f66c7b, #d25068);

        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;

        -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset,
          0 -1px 0 rgba(255, 255, 255, 0.1) inset, 0 4px 0 #ad4257,
          0 4px 2px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset,
          0 -1px 0 rgba(255, 255, 255, 0.1) inset, 0 4px 0 #ad4257,
          0 4px 2px rgba(0, 0, 0, 0.5);
        box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset,
          0 -1px 0 rgba(255, 255, 255, 0.1) inset, 0 4px 0 #ad4257,
          0 4px 2px rgba(0, 0, 0, 0.5);
      }

      .red:hover {
        background: #f66c7b;
        background-image: -webkit-linear-gradient(top, #d25068, #f66c7b);
        background-image: -moz-linear-gradient(top, #d25068, #f66c7b);
        background-image: -ms-linear-gradient(top, #d25068, #f66c7b);
        background-image: -o-linear-gradient(top, #d25068, #f66c7b);
        background-image: linear-gradient(top, #d25068, #f66c7b);
      }
      input[type="button"] {
        font: 17px Calibri;
        width: auto;
        float: right;
        cursor: pointer;
        padding: 7px;
      }
    </style>
  </head>
  <body>
    <?php
    $writejson = file_get_contents('write.json');
    $fanspeedjson = file_get_contents('fanspeeds.json');
    $writedata = json_decode($writejson, true);
    $fanspeeddata = json_decode($fanspeedjson, true);
    ?>
    <div class="container">
      <form action="determination/write.php" method="GET">
      <label for="size" class="col-sm-2 control-label">1.Fan</label>
      <input
        type="range"
        id="my-slider"
        min="0"
        max="100"
        value=<?php echo $fanspeeddata["fan1"];?>
        oninput="slider()"
        name="fan1"
        />
      <div id="slider-value">0</div>
    </div>

    <div class="container1">
      <label for="size" class="col-sm-2 control-label">2.Fan</label>
      <input
        type="range"
        id="my-slider1"
        min="0"
        max="100"
        value=<?php echo $fanspeeddata["fan2"];?>
        oninput="slider1()"
        name="fan2"
      />
      <div id="slider-value1">0</div>
    </div>
    <div class="container2">
      <label for="size" class="col-sm-2 control-label">3.Fan</label>
      <input
        type="range"
        id="my-slider2"
        min="0"
        max="100"
        value=<?php echo $fanspeeddata["fan3"];?>
        oninput="slider2()"
        name="fan3"
      />
      <div id="slider-value2">0</div>
    </div>
    <div class="container3">
      <label for="size" class="col-sm-2 control-label">4.Fan</label>
      <input
        type="range"
        id="my-slider3"
        min="0"
        max="100"
        value=<?php echo $fanspeeddata["fan4"];?>
        oninput="slider3()"
        name="fan4"
      />
      <div id="slider-value3">0</div>
    </div>
    <div>
      <label class="switch">
        <input type="checkbox"<?php 
        if($writedata["role1"] == "1") {
          echo "checked='checked'";
        }
        ?> name="role1" />
        <span class="slider"></span>
      </label>
      <label class="switch-text">Role 1</label>
    </div>

    <div>
      <label class="switch">
        <input type="checkbox" <?php 
        if($writedata["role2"] == "1") {
          echo "checked='checked'";
        }
        ?> name="role2"/>
        <span class="slider"></span>
      </label>
      <label class="switch-text"> Role 2</label>
    </div>
    <!-- <div> -->
      <!-- <input
        type="button"
        id="bt"
        value="Save data to file"
        onclick="saveFile()"
      /> -->
    <!-- </div> -->

    <button type="submit" class="push_button red">Send</button>
    </form>
    <h1>Fan Sicakligi</h1>
    <p>100</p>
    <h1>Fan Nem</h1>
    <p>200</p>
    <script>
      function changeImage() {
        const today = new Date();
        document.getElementById("myImg").src =
          "\\192.168.1.177\medktech\fotograflar" +
          checkTime(today.getDate()) +
          "-" +
          checkTime(today.getMonth() + 1) +
          "-" +
          today.getFullYear() +
          ".jpg";
      }

      function checkTime(t) {
        if (t < 10) {
          t = "0" + t;
        } // add zero in front of numbers < 10

        return t;
      }
    </script>
    <script>
      const mySlider = document.getElementById("my-slider");
      const sliderValue = document.getElementById("slider-value");
      function slider() {
        valPercent = (mySlider.value / mySlider.max) * 100;
        mySlider.style.background = `linear-gradient(to right, #3264fe ${valPercent}%, #d5d5d5 ${valPercent}%)`;
        sliderValue.textContent = mySlider.value;
      }
      slider();

      const mySlider1 = document.getElementById("my-slider1");
      const sliderValue1 = document.getElementById("slider-value1");
      function slider1() {
        valPercent = (mySlider1.value / mySlider1.max) * 100;
        mySlider1.style.background = `linear-gradient(to right, #3264fe ${valPercent}%, #d5d5d5 ${valPercent}%)`;
        sliderValue1.textContent = mySlider1.value;
      }
      slider1();

      const mySlider2 = document.getElementById("my-slider2");
      const sliderValue2 = document.getElementById("slider-value2");
      function slider2() {
        valPercent = (mySlider2.value / mySlider2.max) * 100;
        mySlider2.style.background = `linear-gradient(to right, #3264fe ${valPercent}%, #d5d5d5 ${valPercent}%)`;
        sliderValue2.textContent = mySlider2.value;
      }
      slider2();

      const mySlider3 = document.getElementById("my-slider3");
      const sliderValue3 = document.getElementById("slider-value3");
      function slider3() {
        valPercent = (mySlider3.value / mySlider3.max) * 100;
        mySlider3.style.background = `linear-gradient(to right, #3264fe ${valPercent}%, #d5d5d5 ${valPercent}%)`;
        sliderValue3.textContent = mySlider3.value;
      }
      slider3();
      function PreviewText() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadText").files[0]);
        oFReader.onload = function (oFREvent) {
          document.getElementById("uploadTextValue").value =
            oFREvent.target.result;
          document.getElementById("obj").data = oFREvent.target.result;
        };
      }
    </script>

    <link
      href="http://fonts.googleapis.com/css?family=Oswald"
      rel="stylesheet"
      type="text/css"
    />
  </body>
</html>