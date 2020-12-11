<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('swagger/swagger-ui.css') }}" >
    <link rel="icon" type="image/png" href="{{ asset('swagger/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('swagger/favicon-16x16.png') }}" sizes="16x16" />
    <style>
      html
      {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
      }

      *,
      *:before,
      *:after
      {
        box-sizing: inherit;
      }

      body
      {
        margin:0;
        background: #fafafa;
      }
    </style>
  </head>

  <body>
    <div id="swagger-ui"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/esprima/2.7.3/esprima.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-yaml/3.14.1/js-yaml.min.js"></script>
    <script src="{{ asset('swagger/swagger-ui-bundle.js') }}" charset="UTF-8"> </script>
    <script src="{{ asset('swagger/swagger-ui-standalone-preset.js') }}" charset="UTF-8"> </script>
    <script>
    window.onload = function() {
      const url ="{{ $apispec }}";
      var key = "{{ $token }}";

      let headers = {
          "Authorization": "Bearer "+key,
      };

      fetch(url, {
          method: "GET",
          headers,
      })
      .then(response => response.text())
      .then((specfile)=>{
      
      // Begin Swagger UI call region
      const ui = SwaggerUIBundle({
        spec: jsyaml.load(specfile),
        dom_id: '#swagger-ui',
        deepLinking: true,
        presets: [
          SwaggerUIBundle.presets.apis,
          SwaggerUIStandalonePreset
        ],
        plugins: [
          SwaggerUIBundle.plugins.DownloadUrl
        ],
        layout: "StandaloneLayout",
        
      })
      // End Swagger UI call region

      window.ui = ui;
      });
    }
  </script>
  </body>
</html>
