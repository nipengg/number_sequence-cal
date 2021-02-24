<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Arithmetic & Geometric Sequence Calculator</title>
  <link rel="icon" type="image/jpg" href="icon.png" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Styles -->
  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    a {
      background-color: transparent
    }

    [hidden] {
      display: none
    }

    html {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      line-height: 1.5
    }

    *,
    :after,
    :before {
      box-sizing: border-box;
      border: 0 solid #e2e8f0
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    svg,
    video {
      display: block;
      vertical-align: middle
    }

    video {
      max-width: 100%;
      height: auto
    }

    .bg-white {
      --bg-opacity: 1;
      background-color: #fff;
      background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
      --bg-opacity: 1;
      background-color: #f7fafc;
      background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
      --border-opacity: 1;
      border-color: #edf2f7;
      border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
      border-top-width: 1px
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .font-semibold {
      font-weight: 600
    }

    .h-5 {
      height: 1.25rem
    }

    .h-8 {
      height: 2rem
    }

    .h-16 {
      height: 4rem
    }

    .text-sm {
      font-size: .875rem
    }

    .text-lg {
      font-size: 1.125rem
    }

    .leading-7 {
      line-height: 1.75rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .ml-1 {
      margin-left: .25rem
    }

    .mt-2 {
      margin-top: .5rem
    }

    .mr-2 {
      margin-right: .5rem
    }

    .ml-2 {
      margin-left: .5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-8 {
      margin-top: 2rem
    }

    .ml-12 {
      margin-left: 3rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .max-w-6xl {
      max-width: 72rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .overflow-hidden {
      overflow: hidden
    }

    .p-6 {
      padding: 1.5rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .pt-8 {
      padding-top: 2rem
    }

    .fixed {
      position: fixed
    }

    .relative {
      position: relative
    }

    .top-0 {
      top: 0
    }

    .right-0 {
      right: 0
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
      text-align: center
    }

    .text-gray-200 {
      --text-opacity: 1;
      color: #edf2f7;
      color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
      --text-opacity: 1;
      color: #e2e8f0;
      color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
      --text-opacity: 1;
      color: #cbd5e0;
      color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
      --text-opacity: 1;
      color: #a0aec0;
      color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
      --text-opacity: 1;
      color: #718096;
      color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
      --text-opacity: 1;
      color: #4a5568;
      color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
      --text-opacity: 1;
      color: #1a202c;
      color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
      text-decoration: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
      width: 1.25rem
    }

    .w-8 {
      width: 2rem
    }

    .w-auto {
      width: auto
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
      .sm\:rounded-lg {
        border-radius: .5rem
      }

      .sm\:block {
        display: block
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-start {
        justify-content: flex-start
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:h-20 {
        height: 5rem
      }

      .sm\:ml-0 {
        margin-left: 0
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .sm\:pt-0 {
        padding-top: 0
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width:768px) {
      .md\:border-t-0 {
        border-top-width: 0
      }

      .md\:border-l {
        border-left-width: 1px
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width:1024px) {
      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
      }
    }

    @media (prefers-color-scheme:dark) {
      .dark\:bg-gray-800 {
        --bg-opacity: 1;
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--bg-opacity))
      }

      .dark\:bg-gray-900 {
        --bg-opacity: 1;
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--bg-opacity))
      }

      .dark\:border-gray-700 {
        --border-opacity: 1;
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--border-opacity))
      }

      .dark\:text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
      }

      .dark\:text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
      }
    }

    h1 {
      color: #000000;
    }

    h4 {
      color: #000000;
    }

    th,
    td {
      text-align: center;
      font-size: 20px;
    }

    body {
      font-family: 'Nunito';
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="container-sm">
      <div class="row">
        <div class="col">
          <h1>Arithmetic Sequence Calculator</h1>
          <div class="jumbotron">
            <h4>definition: Un = a + b × (n-1)</h4>
            <h4>example: 1, 3, 5, 7, 9 11, 13, ...</h4>
          </div>

          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">Ratio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu1">Sequence</a>
            </li>
          </ul>

          <div class="table-responsive-sm">
            <div class="tab-content">
              <div id="home" class="container tab-pane active"><br>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th scope="row">The First Number</th>
                      <th scope="row">common difference (f)</th>
                    </tr>
                    <tr>
                      <td><input type="number" class="form-control" id="a1" name="a1" required></td>
                      <td><input type="number" class="form-control" id="f" name="f" required></td>
                    </tr>
                    <tr>
                      <th colspan="2" scope="row">the nth number to obtain</th>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="number" class="form-control" id="n" name="n"></td>
                    </tr>
                    <tr>
                      <th colspan="2" scope="row"> <button type="submit" onclick="calculateArithmetic()"
                          class="btn btn-success">Calculate</button> <button type="button" onclick="clearArithmetic()"
                          class="btn btn-secondary">Clear~</button></th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="menu1" class="container tab-pane fade"><br>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th scope="row">Sequence Arithmetic</th>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" id="test" name="test" placeholder="ex : 1,2,3,4,5">
                      </td>
                    </tr>
                    <tr>
                      <th colspan="2" scope="row">the nth number to obtain</th>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="number" class="form-control" id="n4" name="n4"></td>
                    </tr>
                    <tr>
                      <th colspan="2" scope="row"> <button type="submit" onclick="arithmeticSequence()"
                          class="btn btn-success">Calculate</button> <button type="button" onclick="clearArithmetic()"
                          class="btn btn-secondary">Clear~</button></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="jumbotron">
            <div class="table-responsive-sm">
              <table class="table" id="table1">
                <tbody>
                  <tr>
                    <td style="text-align: left">Sequence :</td>
                    <td>
                      <p id="demo" style="visibility: hidden">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: left">Un :</td>
                    <td>
                      <p id="un" style="visibility: hidden">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: left">Sn :</td>
                    <td>
                      <p id="sn" style="visibility: hidden">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col">
          <h1>Geometric Sequence Calculator</h1>
          <div class="jumbotron">
            <h4>definition: Un = a × r^(n-1)</h4>
            <h4>example: 1, 2, 4, 8, 16, 32, 64, 128, ...</h4>
          </div>

          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home1">Ratio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menu2">Sequence</a>
            </li>
          </ul>

          <div class="table-responsive-sm">
            <div class="tab-content">
              <div id="home1" class="container tab-pane active"><br>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th scope="row">The First Number</th>
                      <th scope="row">common ratio (r)</th>
                    </tr>
                    <tr>
                      <td><input type="number" class="form-control" id="a2" name="a2" required></td>
                      <td><input type="number" class="form-control" id="r" name="r" required></td>
                    </tr>
                    <tr>
                      <th colspan="2" scope="row">the nth number to obtain</th>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="text" class="form-control" id="n1" name="n1"></td>
                      </td>
                    </tr>
                    <tr>
                      <th colspan="2" scope="row"> <button type="submit" onclick="calculateGeometric()"
                          class="btn btn-success">Calculate</button> <button type="button" onclick="clearGeometric()"
                          class="btn btn-secondary">Clear~</button></th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div id="menu2" class="container tab-pane fade"><br>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th scope="row">Sequence Geometric</th>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" id="test2" name="test2" placeholder="ex : 1,2,3,4,5">
                      </td>
                      </td>
                    </tr>
                    <tr>
                      <th colspan="2" scope="row">the nth number to obtain</th>
                    </tr>
                    <tr>
                      <td colspan="2"><input type="number" class="form-control" id="n5" name="n5"></td>
                    </tr>
                    <tr>
                      <th colspan="2" scope="row"> <button type="submit" onclick="geometricSequence()"
                          class="btn btn-success">Calculate</button> <button type="button" onclick="clearGeometric()"
                          class="btn btn-secondary">Clear~</button></th>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>


          <div class="jumbotron">
            <div class="table-responsive-sm">
              <table class="table">
                <tbody>
                  <tr>
                    <td style="text-align: left">Sequence :</td>
                    <td>
                      <p id="demo1" style="visibility: hidden">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: left">Un :</td>
                    <td>
                      <p id="unr" style="visibility: hidden">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: left">Sn :</td>
                    <td>
                      <p id="snr" style="visibility: hidden">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="container">
          <h1>Infinite Geometric Series Calculator</h1>
          <div class="jumbotron">
            <h4>definition: an = a / 1 - r</h4>
            <h4>example: 4, 2 , 0.5, 0.25, 0.125, ...</h4>
          </div>
          <div class="table-responsive-sm">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th scope="row">The First Number</th>
                  <th scope="row">common ratio (r)</th>
                </tr>
                <tr>
                  <td><input type="number" class="form-control" id="a3" name="a2" required></td>
                  <td><input type="number" class="form-control" id="r2" name="r2" required></td>
                </tr>
                <tr>
                  <th colspan="2" scope="row"> <button type="submit" onclick="calculateInfinite()"
                      class="btn btn-success">Calculate</button> <button type="button" onclick="clearInfinite()"
                      class="btn btn-secondary">Clear~</button></th>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="jumbotron">
            <div class="table-responsive-sm">
              <table class="table">
                <tbody>
                  <tr>
                    <td style="text-align: left">Sequence :</td>
                    <td>
                      <p id="demo3" style="visibility: hidden">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: left">Infinite Serial :</td>
                    <td>
                      <p id="infinite" style="visibility: hidden">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>
<script type="text/javascript">
  function arithmeticSequence() {
    var value = document.getElementById('test').value;
    var n4 = parseFloat(document.getElementById('n4').value);
    var array = value.split(",").map(function (item) {
      return parseFloat(item, 10);
    });
    var un = array[0] + (n4 - 1) * (array[1] - array[0]);
    var sn = n4 / 2 * (array[0] + un);

    document.getElementById('un').innerHTML = un;
    document.getElementById('sn').innerHTML = sn;
    document.getElementById("un").style.visibility = "visible";
    document.getElementById("sn").style.visibility = "visible";
  }

  function geometricSequence() {
    var value = document.getElementById('test2').value;
    var n4 = parseFloat(document.getElementById('n5').value);
    var array = value.split(",").map(function (item) {
      return parseFloat(item, 10);
    });

    var r = array[1] / array[0];
    var pow1 = Math.pow(r, n4 - 1);
    var pow2 = Math.pow(r, n4);
    var unr = array[0] * pow1;

    if (r > 1) {
      var snr = array[0] * (pow2 - 1) / (r - 1);

    } else if (r < 1) {
      var snr = array[0] * (1 - pow2) / (1 - r);

    } else if (r == 1 || r === -1) {
      var snr = 'Ratio tidak bisa bernilai 1 atau -1';
      text = 'Ratio tidak bisa bernilai 1 atau -1';
      unr = 'Ratio tidak bisa bernilai 1 atau -1';
    }

    document.getElementById('unr').innerHTML = unr;
    document.getElementById('snr').innerHTML = snr;
    document.getElementById("unr").style.visibility = "visible";
    document.getElementById("snr").style.visibility = "visible";
  }

  function calculateArithmetic() {
    var a1 = parseFloat(document.getElementById("a1").value);
    var f = parseFloat(document.getElementById("f").value);
    var n = parseFloat(document.getElementById("n").value);
    var un = a1 + (n - 1) * f;
    var sn = n / 2 * (a1 + un);

    var text = "";
    var j = 0;
    for (i = a1; j < 10; i = i + f) {
      text += i + ", ";
      j = j + 1;
    }

    text += '....';

    document.getElementById("demo").innerHTML = text;
    document.getElementById('un').innerHTML = un;
    document.getElementById('sn').innerHTML = sn;
    document.getElementById("un").style.visibility = "visible";
    document.getElementById("sn").style.visibility = "visible";
    document.getElementById("demo").style.visibility = "visible";
  }
  function calculateGeometric() {
    var a2 = parseFloat(document.getElementById("a2").value);
    var r = parseFloat(document.getElementById("r").value);
    var n1 = parseFloat(document.getElementById("n1").value);
    var pow1 = Math.pow(r, n1 - 1);
    var pow2 = Math.pow(r, n1);
    var unr = a2 * pow1;

    var text = "";
    var j = 0
    for (i = a2; j < 10; i = i * r) {
      text += i + ", ";
      j = j + 1;
    }

    text += '....';

    if (r > 1) {
      var snr = a2 * (pow2 - 1) / (r - 1);

    } else if (r < 1) {
      var snr = a2 * (1 - pow2) / (1 - r);

    } else if (r == 1 || r === -1) {
      var snr = 'Ratio tidak bisa bernilai 1 atau -1';
      text = 'Ratio tidak bisa bernilai 1 atau -1';
      unr = 'Ratio tidak bisa bernilai 1 atau -1';
    }

    document.getElementById("demo1").innerHTML = text;
    document.getElementById('unr').innerHTML = unr;
    document.getElementById('snr').innerHTML = snr;
    document.getElementById("unr").style.visibility = "visible";
    document.getElementById("snr").style.visibility = "visible";
    document.getElementById("demo1").style.visibility = "visible";
  }
  function calculateInfinite() {
    var a3 = parseFloat(document.getElementById("a3").value);
    var r2 = parseFloat(document.getElementById("r2").value);
    var infinite = a3 / (1 - r2);

    var text = "";
    var j = 0
    for (i = a3; j < 10; i = i * r2) {
      text += i + ", ";
      j = j + 1;
    }

    text += '....';

    if (r2 >= 1 || r2 <= -1) {
      infinite = 'Ratio tidak bisa bernilai >= 1 atau =< -1';
      text = 'Ratio tidak bisa bernilai =< 1 atau =< -1';
    }

    document.getElementById("demo3").innerHTML = text;
    document.getElementById("demo3").style.visibility = "visible";
    document.getElementById('infinite').innerHTML = infinite;
    document.getElementById("infinite").style.visibility = "visible";

  }
  function clearArithmetic() {
    document.getElementById('a1').value = null;
    document.getElementById('f').value = '';
    document.getElementById('n').value = '';
    document.getElementById('test').value = '';
    document.getElementById('n4').value = '';
    document.getElementById("un").style.visibility = "hidden";
    document.getElementById("sn").style.visibility = "hidden";
    document.getElementById("demo").style.visibility = "hidden";
  }
  function clearGeometric() {
    document.getElementById('a2').value = '';
    document.getElementById('r').value = '';
    document.getElementById('n1').value = '';
    document.getElementById('test2').value = '';
    document.getElementById('n5').value = '';
    document.getElementById("unr").style.visibility = "hidden";
    document.getElementById("snr").style.visibility = "hidden";
    document.getElementById("demo1").style.visibility = "hidden";
  }
  function clearInfinite() {
    document.getElementById('a3').value = '';
    document.getElementById('r2').value = '';
    document.getElementById("infinite").style.visibility = "hidden";
    document.getElementById("demo3").style.visibility = "hidden";
  }
</script>

</html>