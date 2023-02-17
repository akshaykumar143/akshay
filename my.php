<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
</head>

<body>
  <input type="text" id="serchData">

  <button onclick="loadflight()">--r--o-</button>
  <div id="rescont"></div>
  <script>
    de = 'AIC655'
    $("#serchData").val(de)



    url = 'https://api.flightapi.io/onewaytrip/YOURAPIKEY/LHR/LAX/2019-10-11/2/0/1/Economy/USD'
    url2 = "https://api.flightapi.io/onewaytrip/63ecb40d0375c981905e8380/TRV/BLR/2023-02-16/1/0/0/Economy/INR"
    url3 = "https://api.flightapi.io/roundtrip/63ecb40d0375c981905e8380/TRV/BLR/2023-02-16/2023-02-17/1/0/1/Economy/INR"
    $.ajax({
      url: url2,
      data: {
        access_key: '21c1b59a0c9b50f3ac71533736de0805'
      },
      dataType: 'json',
      success: function(apiResponse) {
        if (Array.isArray(apiResponse['results'])) {
          apiResponse['results'].forEach(flight => {
            if (!flight['live']['is_ground']) {
              console.log(`${flight['airline']['name']} flight ${flight['flight']['iata']}`,
                `from ${flight['departure']['airport']} (${flight['departure']['iata']})`,
                `to ${flight['arrival']['airport']} (${flight['arrival']['iata']}) is in the air.`);
            }
          });
        }
      }
    });
    co = 1;

    function loadflight() {
      settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://flight-radar1.p.rapidapi.com/flights/search?query=" + $("#serchData").val() + "&limit=25",
        "method": "GET",
        "headers": {
          "X-RapidAPI-Key": "d26130b6d2msh26c1bbe7d935885p1eed57jsn9a2192321c0d",
          "X-RapidAPI-Host": "flight-radar1.p.rapidapi.com"
        }
      };

      $.ajax(settings).done(function(response) {
        $("#rescont").append(co + "---" + JSON.stringify(response) + "--------")

        $("#rescont").append("<br>")
        co++;
      });
    }
  </script>

  <style>
    #rescont {
      max-width: 80%;
      padding: 3px;
      overflow: hidden;
      line-break: anywhere;
    }
    .conteiner1{
      max-width: 98%;
      padding: 3px;
      overflow: scroll;
      line-break: anywhere;
      max-height: 40vh;
    }
  </style>
  <!--  -->
  <p>Welcome To My Domain</p>
  <form>
    <input type="button" value="Click" onclick="demo();" />
  </form>

  <script type="text/javascript">
    function demo() {
      alert("content replacing!");
      document.write("Have a Nice day!");
    }
  </script>
<!-- ///////// -->

  <h1 style="color:blue;text-align: center;">
    Demonstration of jquery's Deferred() fuction
  </h1>
  <p id="FUNC_UP">
  </p>
  <button onclick="def_meth();">
    click me
  </button>
  <p id="FUNC_DOWN">
  </p>
  <p id="cost" class="conteiner1"> </p>
  <script>
    var v_up = document.querySelector("#FUNC_UP");
    v_up.innerHTML = "Welcome to JQuery.Deferred() function";

    function def_Func1(value, div) {
      console.log("f..1.." ,value, div);
      $(div).append("<br> fu 1 This call is from doneCallbacks - " + value);
    }
    function def_Func2(value, div) {
      console.log("f..2.." ,value, div);
      $(div).append("<br> fu 2 This call is from failCallbacks - " + value);
    }
    function def_Func3(value, div) {
      console.log("f..3..." ,value, div);
      $(div).append("<br> fu 3 This call is from progressCallbacks - " + value);
    }

    function def_meth() {
      console.log(1);
      var def_obj = $.Deferred();
      console.log("deff");

      def_obj.then(def_Func1, def_Func2, def_Func3);
      console.log("atttt");

      def_obj.notify('<br>    Deferred "def" is notified.<br/>', '#FUNC_DOWN');
      console.log("a not");

      def_obj.resolve('<br>   Deferred "def" is resolved.<br/>', '#FUNC_DOWN');
      console.log("a reseolved",def_obj.state() );
 
      for (let index = 600; index <= 6000; index+=150) {
       
        setInterval(() => {
            $("#cost").append(". ");
          }, index);
      }
      // setInterval(() => {
      //   $("#cost").append("foo ");
        
      // }, 270);
      console.log("time outed");
       
      $('#FUNC_DOWN').text('---In this the deferred state is ' + def_obj.state() + ' ');
    }
  </script>
<!-- nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn -->


</body>

</html>