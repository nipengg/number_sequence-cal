<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            h1{
                color: white;
            }
            h4{
                color: white;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="container">
                <h1>Arithmetic Sequence Calculator</h1>
                <h4>definition: an = a1 + f × (n-1)</h4>
                <h4>example: 1, 3, 5, 7, 9 11, 13, ...</h4>
                <table class="table table-dark">
                    <tbody>
                      <tr>
                        <th scope="row">The First Number</th>
                        <td><input type="number" id="a1" name="a1"></td>
                      </tr>
                      <tr>
                        <th scope="row">common difference (f)</th>
                        <td><input type="number" id="f" name="f"></td>
                      </tr>
                      <tr>
                        <th scope="row">the nth number to obtain</th>
                        <td><input type="number" id="n" name="n"></td>
                      </tr>
                      <tr>
                        <th colspan="2" scope="row"> <button type="submit" onclick="calculateArithmetic()" class="btn btn-success">Calculate</button> <button type="button" onclick="clearArithmetic()" class="btn btn-secondary">Clear~</button></th>
                      </tr>
                    </tbody>
                  </table>
                    <p id="demo" style="color: white; visibility: hidden"></p>
                    <p id="un" style="color: white; visibility: hidden"></p>
                    <p id="sn" style="color: white; visibility: hidden"></p>
            </div>
            <div class="container">
                <h1>Geometric Sequence Calculator</h1>
                <h4>definition: an = a × rn-1</h4>
                <h4>example: 1, 2, 4, 8, 16, 32, 64, 128, ...</h4>
                <table class="table table-dark">
                    <tbody>
                      <tr>
                        <th scope="row">The First Number</th>
                        <td><input type="number" id="a2" name="a2"></td>
                      </tr>
                      <tr>
                        <th scope="row">common ratio (r)</th>
                        <td><input type="number" id="r" name="r"></td>
                      </tr>
                      <tr>
                        <th scope="row">the nth number to obtain</th>
                        <td><input type="number" id="n1" name="n1"></td>
                      </tr>
                      <tr>
                        <th colspan="2" scope="row"> <button type="submit" onclick="calculateGeometric()" class="btn btn-success">Calculate</button> <button type="button" onclick="clearGeometric()" class="btn btn-secondary">Clear~</button></th>
                      </tr>
                    </tbody>
                  </table>
                  
                    <p id="demo1" style="color: white; visibility: hidden"></p>
                    <p id="unr" style="color: white; visibility: hidden"></p>
                    <p id="snr" style="color: white; visibility: hidden"></p>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        function calculateArithmetic(){
            var a1 = parseInt(document.getElementById("a1").value);
            var f = parseInt(document.getElementById("f").value);
            var n = parseInt(document.getElementById("n").value);
            var un = a1 + (n - 1) * f;
            var sn = n/2 * (a1 + un);

            var text = "";
            for (i = a1; i < 100; i = i + f){
              text += i + ", ";
            }

            document.getElementById("demo").innerHTML = text;
            document.getElementById('un').innerHTML = un;
            document.getElementById('sn').innerHTML = sn;
            document.getElementById("un").style.visibility = "visible";
            document.getElementById("sn").style.visibility = "visible";
            document.getElementById("demo").style.visibility = "visible";
        }
        function calculateGeometric(){
            var a2 = parseInt(document.getElementById("a2").value);
            var r = parseInt(document.getElementById("r").value);
            var n1 = parseInt(document.getElementById("n1").value);
            var pow1 = Math.pow(r, n1 - 1);
            var pow2 = Math.pow(r, n1);
            var unr = a2 * pow1;
            var snr = a2 * (pow2 - 1) / (r - 1);

            var text = "";
            for (i = a2; i < 100; i = i * r){
              text += i + ", ";
            }

            document.getElementById("demo1").innerHTML = text;
            document.getElementById('unr').innerHTML = unr;
            document.getElementById('snr').innerHTML = snr;
            document.getElementById("unr").style.visibility = "visible";
            document.getElementById("snr").style.visibility = "visible";
            document.getElementById("demo1").style.visibility = "visible";
        }
        function clearArithmetic(){
            document.getElementById('a1').value = '';
            document.getElementById('f').value = '';
            document.getElementById('n').value = '';
            document.getElementById("un").style.visibility = "hidden";
            document.getElementById("sn").style.visibility = "hidden";
            document.getElementById("demo").style.visibility = "hidden";
        }
        function clearGeometric(){
            document.getElementById('a2').value = '';
            document.getElementById('r').value = '';
            document.getElementById('n1').value = '';
            document.getElementById("unr").style.visibility = "hidden";
            document.getElementById("snr").style.visibility = "hidden";
            document.getElementById("demo1").style.visibility = "hidden";
        }
    </script>
</html>
