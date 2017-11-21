
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
      #jb-container {
        width: 940px;
        margin: 10px auto;
        padding: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-header {
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-content {
        width: 580px;
        padding: 20px;
        margin-bottom: 20px;
        float: left;
        border: 1px solid #bcbcbc;
      }
      #jb-sidebar {
        width: 260px;
        padding: 20px;
        margin-bottom: 20px;
        float: right;
        border: 1px solid #bcbcbc;
      }
      #jb-footer {
        clear: both;
        padding: 20px;
        border: 1px solid #bcbcbc;
      }
      @media ( max-width: 480px ) {
            #jb-container {
              width: auto;
            }
            #jb-content {
              float: none;
              width: auto;
            }
            #jb-sidebar {
              float: none;
              width: auto;
            }
      }
    </style>
</head>

<html>
    <body>
    <div id="jb-container">
        
        <div id="jb-header">
            <h1>Header (Responsive Layout)</h1>
        </div>
        
        <div id="jb-content">
            <h2>Content</h2>
            <p>
                <div id="thing">{{$data}}</div>
                number: <input id="input" type="num"></input>
            </p>
        </div>
        
        <div id="jb-sidebar">
            <h2>Sidebar</h2>
            <ul>
              <li>Menu-1</li>
              <li>Menu-2</li>
              <li>Menu-3</li>
            </ul>
        </div>
      
        <div id="jb-footer">
             <h1>Footer</h1>
        </div>
      
    </div>
  </body>
</html>

<script>
    (function(){
        $("#input").on('change', function(event){
            $.ajax({
                url: '/get/' + event.currentTarget.value,
                success: function (response){
                	var response = JSON.parse(response)
                	var htmls = "";
                	htmls += "<table>";
                	for (var key in response) {
				        if (response.hasOwnProperty(key)) {
				          htmls += "<tr>";
				          htmls += "<td>" + key + "</td> ";
				            htmls += "<td>" + response[key]["15m"] + "</td> ";
				            htmls += "<td>" + response[key]["last"] + "</td> ";
				            htmls += "<td>" + response[key]["buy"] + "</td> ";
				            htmls += "<td>" + response[key]["sell"] + "</td> ";
				            htmls += "<td>" + response[key]["symbol"] + "</td> ";
				          htmls += "</tr>";
				        }
				      }
					htmls += "</table>";
                    $("#thing").html(htmls);
                }
            });
        });
    })();
</script>