<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Megabit Lost &amp; Found Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;python&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
        <img src="../logo.png" alt="logo" class="logo" style="padding-top: 10px;" width="230px"/>
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                            <a href="#" data-language-name="python">python</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: December 10 2020</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Lost &amp; Found is an application that user can report when find or lost personal belongings in train stations.</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "https://megabit-lostnfound.herokuapp.com";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.4.2.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">https://megabit-lostnfound.herokuapp.com</code></pre><h1>Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p><h1>Endpoints</h1>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/recusandae" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/recusandae"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/recusandae'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v1-web-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-web-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-web-users--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-web-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-web-users--id-"></code></pre>
</div>
<form id="form-GETapi-v1-web-users--id-" data-method="GET" data-path="api/v1/web/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-web-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-web-users--id-" onclick="tryItOut('GETapi-v1-web-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-web-users--id-" onclick="cancelTryOut('GETapi-v1-web-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-web-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/web/users/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-web-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-web-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-web-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/quaerat" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/quaerat"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/quaerat'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v1-web-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-web-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-web-users--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-web-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-web-users--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-web-users--id-" data-method="PUT" data-path="api/v1/web/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-web-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-web-users--id-" onclick="tryItOut('PUTapi-v1-web-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-web-users--id-" onclick="cancelTryOut('PUTapi-v1-web-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-web-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/web/users/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-web-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-web-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-web-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/ducimus" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/ducimus"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/ducimus'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v1-web-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-web-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-web-users--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-web-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-web-users--id-"></code></pre>
</div>
<form id="form-PATCHapi-v1-web-users--id-" data-method="PATCH" data-path="api/v1/web/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-web-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-web-users--id-" onclick="tryItOut('PATCHapi-v1-web-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-web-users--id-" onclick="cancelTryOut('PATCHapi-v1-web-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-web-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/web/users/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v1-web-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v1-web-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v1-web-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>api/v1/web/users/{id}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/tempore" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/tempore"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/tempore'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v1-web-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-web-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-web-users--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-web-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-web-users--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-web-users--id-" data-method="DELETE" data-path="api/v1/web/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-web-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-web-users--id-" onclick="tryItOut('DELETEapi-v1-web-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-web-users--id-" onclick="cancelTryOut('DELETEapi-v1-web-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-web-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/web/users/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-web-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-web-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-web-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>api/v1/web/users/{id}/restore</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/a/restore" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/a/restore"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/a/restore'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v1-web-users--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-web-users--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-web-users--id--restore"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-web-users--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-web-users--id--restore"></code></pre>
</div>
<form id="form-PATCHapi-v1-web-users--id--restore" data-method="PATCH" data-path="api/v1/web/users/{id}/restore" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-web-users--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-web-users--id--restore" onclick="tryItOut('PATCHapi-v1-web-users--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-web-users--id--restore" onclick="cancelTryOut('PATCHapi-v1-web-users--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-web-users--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/web/users/{id}/restore</code></b>
</p>
<p>
<label id="auth-PATCHapi-v1-web-users--id--restore" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v1-web-users--id--restore" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v1-web-users--id--restore" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 6,
            "nama": "Sammy Wolf",
            "nip": "4556066534106639",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00bb33?text=voluptate",
            "role": 2,
            "stasiun_id": null
        },
        {
            "id": 8,
            "nama": "Tono",
            "nip": "124",
            "image": "",
            "role": 1,
            "stasiun_id": null
        },
        {
            "id": 9,
            "nama": "Tono",
            "nip": "125",
            "image": "",
            "role": 1,
            "stasiun_id": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/web\/users?page=1",
        "last": "http:\/\/localhost\/api\/v1\/web\/users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/web\/users?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/web\/users",
        "per_page": 20,
        "to": 3,
        "total": 3
    }
}</code></pre>
<div id="execution-results-GETapi-v1-web-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-web-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-web-users"></code></pre>
</div>
<div id="execution-error-GETapi-v1-web-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-web-users"></code></pre>
</div>
<form id="form-GETapi-v1-web-users" data-method="GET" data-path="api/v1/web/users" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-web-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-web-users" onclick="tryItOut('GETapi-v1-web-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-web-users" onclick="cancelTryOut('GETapi-v1-web-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-web-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/web/users</code></b>
</p>
<p>
<label id="auth-GETapi-v1-web-users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-web-users" data-component="header"></label>
</p>
</form>
<h2>api/v1/web/auth/login</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/login" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/login"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/login'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v1-web-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-web-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-web-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-web-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-web-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v1-web-auth-login" data-method="POST" data-path="api/v1/web/auth/login" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-web-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-web-auth-login" onclick="tryItOut('POSTapi-v1-web-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-web-auth-login" onclick="cancelTryOut('POSTapi-v1-web-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-web-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/web/auth/login</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-web-auth-login" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-web-auth-login" data-component="header"></label>
</p>
</form>
<h2>api/v1/web/auth/register</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/register" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/register"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/register'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v1-web-auth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-web-auth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-web-auth-register"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-web-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-web-auth-register"></code></pre>
</div>
<form id="form-POSTapi-v1-web-auth-register" data-method="POST" data-path="api/v1/web/auth/register" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-web-auth-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-web-auth-register" onclick="tryItOut('POSTapi-v1-web-auth-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-web-auth-register" onclick="cancelTryOut('POSTapi-v1-web-auth-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-web-auth-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/web/auth/register</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-web-auth-register" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-web-auth-register" data-component="header"></label>
</p>
</form>
<h2>api/v1/web/auth/logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<div id="execution-results-GETapi-v1-web-auth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-web-auth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-web-auth-logout"></code></pre>
</div>
<div id="execution-error-GETapi-v1-web-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-web-auth-logout"></code></pre>
</div>
<form id="form-GETapi-v1-web-auth-logout" data-method="GET" data-path="api/v1/web/auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-web-auth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-web-auth-logout" onclick="tryItOut('GETapi-v1-web-auth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-web-auth-logout" onclick="cancelTryOut('GETapi-v1-web-auth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-web-auth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/web/auth/logout</code></b>
</p>
</form>
<h2>api/v1/web/auth/refresh</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<div id="execution-results-GETapi-v1-web-auth-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-web-auth-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-web-auth-refresh"></code></pre>
</div>
<div id="execution-error-GETapi-v1-web-auth-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-web-auth-refresh"></code></pre>
</div>
<form id="form-GETapi-v1-web-auth-refresh" data-method="GET" data-path="api/v1/web/auth/refresh" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-web-auth-refresh', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-web-auth-refresh" onclick="tryItOut('GETapi-v1-web-auth-refresh');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-web-auth-refresh" onclick="cancelTryOut('GETapi-v1-web-auth-refresh');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-web-auth-refresh" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/web/auth/refresh</code></b>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/est"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/users/est'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v1-android-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-android-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-android-users--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-android-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-android-users--id-"></code></pre>
</div>
<form id="form-GETapi-v1-android-users--id-" data-method="GET" data-path="api/v1/android/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-android-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-android-users--id-" onclick="tryItOut('GETapi-v1-android-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-android-users--id-" onclick="cancelTryOut('GETapi-v1-android-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-android-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/android/users/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-android-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-android-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-android-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/iure" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/iure"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/users/iure'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v1-android-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-android-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-android-users--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-android-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-android-users--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-android-users--id-" data-method="PUT" data-path="api/v1/android/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-android-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-android-users--id-" onclick="tryItOut('PUTapi-v1-android-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-android-users--id-" onclick="cancelTryOut('PUTapi-v1-android-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-android-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/android/users/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-android-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-android-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-android-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update partially the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/veritatis" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/veritatis"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/users/veritatis'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v1-android-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-android-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-android-users--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-android-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-android-users--id-"></code></pre>
</div>
<form id="form-PATCHapi-v1-android-users--id-" data-method="PATCH" data-path="api/v1/android/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-android-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-android-users--id-" onclick="tryItOut('PATCHapi-v1-android-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-android-users--id-" onclick="cancelTryOut('PATCHapi-v1-android-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-android-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/android/users/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v1-android-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v1-android-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v1-android-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/users'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "Pierre Jacobi",
            "email": "cebert@gmail.com",
            "email_verified_at": "2020-12-04T15:26:50.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0011ff?text=rerum"
        },
        {
            "id": 2,
            "nama": "Ted Johns",
            "email": "merlin35@yahoo.com",
            "email_verified_at": "2020-12-04T15:26:50.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00cc88?text=quisquam"
        },
        {
            "id": 3,
            "nama": "Carter Sporer",
            "email": "jordy.keeling@gmail.com",
            "email_verified_at": "2020-12-04T15:26:51.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/004433?text=quo"
        },
        {
            "id": 4,
            "nama": "Marlin Gleichner II",
            "email": "gorn@yahoo.com",
            "email_verified_at": "2020-12-04T15:26:51.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0077bb?text=aliquam"
        },
        {
            "id": 5,
            "nama": "Polly Dickinson",
            "email": "noemi.reilly@gmail.com",
            "email_verified_at": "2020-12-04T15:26:52.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/003355?text=ex"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/android\/users?page=1",
        "last": "http:\/\/localhost\/api\/v1\/android\/users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/android\/users?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/android\/users",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}</code></pre>
<div id="execution-results-GETapi-v1-android-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-android-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-android-users"></code></pre>
</div>
<div id="execution-error-GETapi-v1-android-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-android-users"></code></pre>
</div>
<form id="form-GETapi-v1-android-users" data-method="GET" data-path="api/v1/android/users" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-android-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-android-users" onclick="tryItOut('GETapi-v1-android-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-android-users" onclick="cancelTryOut('GETapi-v1-android-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-android-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/android/users</code></b>
</p>
<p>
<label id="auth-GETapi-v1-android-users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-android-users" data-component="header"></label>
</p>
</form>
<h2>api/v1/android/auth/login</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/login" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/login"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/login'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v1-android-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-android-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-android-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-android-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-android-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v1-android-auth-login" data-method="POST" data-path="api/v1/android/auth/login" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-android-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-android-auth-login" onclick="tryItOut('POSTapi-v1-android-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-android-auth-login" onclick="cancelTryOut('POSTapi-v1-android-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-android-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/android/auth/login</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-android-auth-login" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-android-auth-login" data-component="header"></label>
</p>
</form>
<h2>api/v1/android/auth/register</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/register" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/register"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/register'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v1-android-auth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-android-auth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-android-auth-register"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-android-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-android-auth-register"></code></pre>
</div>
<form id="form-POSTapi-v1-android-auth-register" data-method="POST" data-path="api/v1/android/auth/register" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-android-auth-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-android-auth-register" onclick="tryItOut('POSTapi-v1-android-auth-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-android-auth-register" onclick="cancelTryOut('POSTapi-v1-android-auth-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-android-auth-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/android/auth/register</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-android-auth-register" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-android-auth-register" data-component="header"></label>
</p>
</form>
<h2>api/v1/android/auth/logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<div id="execution-results-GETapi-v1-android-auth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-android-auth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-android-auth-logout"></code></pre>
</div>
<div id="execution-error-GETapi-v1-android-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-android-auth-logout"></code></pre>
</div>
<form id="form-GETapi-v1-android-auth-logout" data-method="GET" data-path="api/v1/android/auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-android-auth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-android-auth-logout" onclick="tryItOut('GETapi-v1-android-auth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-android-auth-logout" onclick="cancelTryOut('GETapi-v1-android-auth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-android-auth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/android/auth/logout</code></b>
</p>
</form>
<h2>api/v1/android/auth/refresh</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<div id="execution-results-GETapi-v1-android-auth-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-android-auth-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-android-auth-refresh"></code></pre>
</div>
<div id="execution-error-GETapi-v1-android-auth-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-android-auth-refresh"></code></pre>
</div>
<form id="form-GETapi-v1-android-auth-refresh" data-method="GET" data-path="api/v1/android/auth/refresh" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-android-auth-refresh', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-android-auth-refresh" onclick="tryItOut('GETapi-v1-android-auth-refresh');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-android-auth-refresh" onclick="cancelTryOut('GETapi-v1-android-auth-refresh');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-android-auth-refresh" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/android/auth/refresh</code></b>
</p>
</form>
<h2>api/v1/android/auth/oauth2/google/authorize</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/oauth2/google/authorize" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/oauth2/google/authorize"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/oauth2/google/authorize'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Client error: `POST https:\/\/www.googleapis.com\/oauth2\/v4\/token` resulted in a `400 Bad Request` response:\n{\n  \"error\": \"invalid_request\",\n  \"error_description\": \"Missing required parameter: code\"\n}\n",
    "exception": "GuzzleHttp\\Exception\\ClientException",
    "trace": [
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\Middleware.php",
            "line": 69,
            "function": "create",
            "class": "GuzzleHttp\\Exception\\RequestException",
            "type": "::",
            "args": [
                {},
                {},
                null,
                [],
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 204,
            "function": "GuzzleHttp\\{closure}",
            "class": "GuzzleHttp\\Middleware",
            "type": "::",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 153,
            "function": "callHandler",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "::",
            "args": [
                1,
                {},
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\TaskQueue.php",
            "line": 48,
            "function": "GuzzleHttp\\Promise\\{closure}",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "::",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 248,
            "function": "run",
            "class": "GuzzleHttp\\Promise\\TaskQueue",
            "type": "-&gt;",
            "args": [
                true
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 224,
            "function": "invokeWaitFn",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 269,
            "function": "waitIfPending",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 226,
            "function": "invokeWaitList",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 62,
            "function": "waitIfPending",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\Client.php",
            "line": 187,
            "function": "wait",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\ClientTrait.php",
            "line": 95,
            "function": "request",
            "class": "GuzzleHttp\\Client",
            "type": "-&gt;",
            "args": [
                "POST",
                "https:\/\/www.googleapis.com\/oauth2\/v4\/token",
                {
                    "headers": {
                        "Accept": "application\/json"
                    },
                    "form_params": {
                        "grant_type": "authorization_code",
                        "client_id": "304092645592-42g8iugfoohtdgq3jqgio9h67ojb7vhh.apps.googleusercontent.com",
                        "client_secret": "noXkPSo7ZalqZoMeYJXgvnmt",
                        "code": null,
                        "redirect_uri": "http:\/\/localhost:8000\/api\/v1\/android\/auth\/oauth2\/google\/authorize"
                    },
                    "synchronous": true
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\socialite\\src\\Two\\AbstractProvider.php",
            "line": 273,
            "function": "post",
            "class": "GuzzleHttp\\Client",
            "type": "-&gt;",
            "args": [
                "https:\/\/www.googleapis.com\/oauth2\/v4\/token",
                {
                    "headers": {
                        "Accept": "application\/json"
                    },
                    "form_params": {
                        "grant_type": "authorization_code",
                        "client_id": "304092645592-42g8iugfoohtdgq3jqgio9h67ojb7vhh.apps.googleusercontent.com",
                        "client_secret": "noXkPSo7ZalqZoMeYJXgvnmt",
                        "code": null,
                        "redirect_uri": "http:\/\/localhost:8000\/api\/v1\/android\/auth\/oauth2\/google\/authorize"
                    }
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\app\\Http\\Controllers\\v1\\Android\\Oauth2Controller.php",
            "line": 30,
            "function": "getAccessTokenResponse",
            "class": "Laravel\\Socialite\\Two\\AbstractProvider",
            "type": "-&gt;",
            "args": [
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "handleGoogleCallback",
            "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "-&gt;",
            "args": [
                "handleGoogleCallback",
                [
                    {
                        "attributes": {},
                        "request": {},
                        "query": {},
                        "server": {},
                        "files": {},
                        "cookies": {},
                        "headers": {}
                    }
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v1\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {},
                "handleGoogleCallback"
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 692,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {},
                [
                    {
                        "key": "e7cf66797159dc3cd3e85f72e15bb551",
                        "maxAttempts": 60,
                        "decayMinutes": 1,
                        "responseCallback": null
                    }
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {},
                "api",
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {},
                "api"
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 694,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 669,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v1\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 635,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v1\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v1\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v1\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "id": "d7770fbdcc266a6e29f94b49f98f9dcd",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                },
                {
                    "methods": [
                        "GET"
                    ],
                    "config": {
                        "app.env": "documentation"
                    },
                    "queryParams": [],
                    "bodyParams": [],
                    "fileParams": [],
                    "cookies": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v1\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "d7770fbdcc266a6e29f94b49f98f9dcd",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v1\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "name": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                },
                {
                    "name": "handleGoogleCallback",
                    "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "d7770fbdcc266a6e29f94b49f98f9dcd",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;",
            "args": [
                "responses",
                {
                    "id": "d7770fbdcc266a6e29f94b49f98f9dcd",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                },
                [
                    {
                        "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                        "methods": [
                            "GET",
                            "HEAD"
                        ],
                        "action": {
                            "middleware": [
                                "api"
                            ],
                            "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                            "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                            "namespace": null,
                            "prefix": "api\/v1\/android\/auth",
                            "where": []
                        },
                        "isFallback": false,
                        "controller": {},
                        "defaults": [],
                        "wheres": [],
                        "parameters": [],
                        "parameterNames": [],
                        "computedMiddleware": [
                            "api"
                        ],
                        "compiled": {}
                    },
                    {
                        "name": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                    },
                    {
                        "name": "handleGoogleCallback",
                        "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                    },
                    {
                        "headers": {
                            "Content-Type": "application\/json",
                            "Accept": "application\/json"
                        },
                        "response_calls": {
                            "methods": [
                                "GET"
                            ],
                            "config": {
                                "app.env": "documentation"
                            },
                            "queryParams": [],
                            "bodyParams": [],
                            "fileParams": [],
                            "cookies": []
                        }
                    }
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;",
            "args": [
                {
                    "name": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                },
                {
                    "name": "handleGoogleCallback",
                    "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                },
                {
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v1\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "d7770fbdcc266a6e29f94b49f98f9dcd",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v1\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v1\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;",
            "args": [
                [
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {}
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": [
                {
                    "contextual": []
                },
                [
                    {},
                    "handle"
                ],
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": [
                {
                    "contextual": []
                },
                [
                    {},
                    "handle"
                ],
                [],
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;",
            "args": [
                [
                    {},
                    "handle"
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-v1-android-auth-oauth2-google-authorize" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-android-auth-oauth2-google-authorize"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-android-auth-oauth2-google-authorize"></code></pre>
</div>
<div id="execution-error-GETapi-v1-android-auth-oauth2-google-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-android-auth-oauth2-google-authorize"></code></pre>
</div>
<form id="form-GETapi-v1-android-auth-oauth2-google-authorize" data-method="GET" data-path="api/v1/android/auth/oauth2/google/authorize" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-android-auth-oauth2-google-authorize', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-android-auth-oauth2-google-authorize" onclick="tryItOut('GETapi-v1-android-auth-oauth2-google-authorize');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-android-auth-oauth2-google-authorize" onclick="cancelTryOut('GETapi-v1-android-auth-oauth2-google-authorize');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-android-auth-oauth2-google-authorize" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/android/auth/oauth2/google/authorize</code></b>
</p>
<p>
<label id="auth-GETapi-v1-android-auth-oauth2-google-authorize" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-android-auth-oauth2-google-authorize" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/et" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/et"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/et'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v1-stasiun--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-stasiun--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-stasiun--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-stasiun--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-stasiun--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-stasiun--id-" data-method="DELETE" data-path="api/v1/stasiun/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-stasiun--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-stasiun--id-" onclick="tryItOut('DELETEapi-v1-stasiun--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-stasiun--id-" onclick="cancelTryOut('DELETEapi-v1-stasiun--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-stasiun--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/stasiun/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-stasiun--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-stasiun--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-stasiun--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/omnis" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/omnis"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/omnis'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v1-stasiun--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-stasiun--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-stasiun--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-stasiun--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-stasiun--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-stasiun--id-" data-method="PUT" data-path="api/v1/stasiun/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-stasiun--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-stasiun--id-" onclick="tryItOut('PUTapi-v1-stasiun--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-stasiun--id-" onclick="cancelTryOut('PUTapi-v1-stasiun--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-stasiun--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/stasiun/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-stasiun--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-stasiun--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-stasiun--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/nisi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/nisi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/nisi'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v1-stasiun--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-stasiun--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-stasiun--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-stasiun--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-stasiun--id-"></code></pre>
</div>
<form id="form-GETapi-v1-stasiun--id-" data-method="GET" data-path="api/v1/stasiun/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-stasiun--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-stasiun--id-" onclick="tryItOut('GETapi-v1-stasiun--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-stasiun--id-" onclick="cancelTryOut('GETapi-v1-stasiun--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-stasiun--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/stasiun/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-stasiun--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-stasiun--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-stasiun--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v1-stasiun" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-stasiun"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-stasiun"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-stasiun" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-stasiun"></code></pre>
</div>
<form id="form-POSTapi-v1-stasiun" data-method="POST" data-path="api/v1/stasiun" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-stasiun', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-stasiun" onclick="tryItOut('POSTapi-v1-stasiun');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-stasiun" onclick="cancelTryOut('POSTapi-v1-stasiun');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-stasiun" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/stasiun</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-stasiun" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-stasiun" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "Bobbie Haley V"
        },
        {
            "id": 2,
            "nama": "Filiberto Predovic"
        },
        {
            "id": 3,
            "nama": "Delia Pollich Jr."
        },
        {
            "id": 4,
            "nama": "Lou Gutmann"
        },
        {
            "id": 5,
            "nama": "Taurean Davis I"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/stasiun?page=1",
        "last": "http:\/\/localhost\/api\/v1\/stasiun?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/stasiun?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/stasiun",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}</code></pre>
<div id="execution-results-GETapi-v1-stasiun" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-stasiun"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-stasiun"></code></pre>
</div>
<div id="execution-error-GETapi-v1-stasiun" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-stasiun"></code></pre>
</div>
<form id="form-GETapi-v1-stasiun" data-method="GET" data-path="api/v1/stasiun" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-stasiun', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-stasiun" onclick="tryItOut('GETapi-v1-stasiun');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-stasiun" onclick="cancelTryOut('GETapi-v1-stasiun');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-stasiun" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/stasiun</code></b>
</p>
<p>
<label id="auth-GETapi-v1-stasiun" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-stasiun" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori/expedita" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori/expedita"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori/expedita'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v1-barang-kategori--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-barang-kategori--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-barang-kategori--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-barang-kategori--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-barang-kategori--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-barang-kategori--id-" data-method="DELETE" data-path="api/v1/barang-kategori/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-barang-kategori--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-barang-kategori--id-" onclick="tryItOut('DELETEapi-v1-barang-kategori--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-barang-kategori--id-" onclick="cancelTryOut('DELETEapi-v1-barang-kategori--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-barang-kategori--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/barang-kategori/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-barang-kategori--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-barang-kategori--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-barang-kategori--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori/est"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori/est'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v1-barang-kategori--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-barang-kategori--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-barang-kategori--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-barang-kategori--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-barang-kategori--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-barang-kategori--id-" data-method="PUT" data-path="api/v1/barang-kategori/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-barang-kategori--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-barang-kategori--id-" onclick="tryItOut('PUTapi-v1-barang-kategori--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-barang-kategori--id-" onclick="cancelTryOut('PUTapi-v1-barang-kategori--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-barang-kategori--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/barang-kategori/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-barang-kategori--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-barang-kategori--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-barang-kategori--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori/pariatur" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori/pariatur"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori/pariatur'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v1-barang-kategori--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang-kategori--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang-kategori--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang-kategori--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang-kategori--id-"></code></pre>
</div>
<form id="form-GETapi-v1-barang-kategori--id-" data-method="GET" data-path="api/v1/barang-kategori/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang-kategori--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang-kategori--id-" onclick="tryItOut('GETapi-v1-barang-kategori--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang-kategori--id-" onclick="cancelTryOut('GETapi-v1-barang-kategori--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang-kategori--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang-kategori/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang-kategori--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang-kategori--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-barang-kategori--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v1-barang-kategori" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-barang-kategori"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-barang-kategori"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-barang-kategori" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-barang-kategori"></code></pre>
</div>
<form id="form-POSTapi-v1-barang-kategori" data-method="POST" data-path="api/v1/barang-kategori" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-barang-kategori', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-barang-kategori" onclick="tryItOut('POSTapi-v1-barang-kategori');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-barang-kategori" onclick="cancelTryOut('POSTapi-v1-barang-kategori');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-barang-kategori" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/barang-kategori</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-barang-kategori" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-barang-kategori" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-kategori'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "Desmond Hilpert"
        },
        {
            "id": 2,
            "nama": "Eryn Stark"
        },
        {
            "id": 3,
            "nama": "Mr. Toby Fadel"
        },
        {
            "id": 4,
            "nama": "Willie Muller"
        },
        {
            "id": 5,
            "nama": "Veda Botsford"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/barang-kategori?page=1",
        "last": "http:\/\/localhost\/api\/v1\/barang-kategori?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/barang-kategori?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/barang-kategori",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}</code></pre>
<div id="execution-results-GETapi-v1-barang-kategori" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang-kategori"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang-kategori"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang-kategori" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang-kategori"></code></pre>
</div>
<form id="form-GETapi-v1-barang-kategori" data-method="GET" data-path="api/v1/barang-kategori" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang-kategori', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang-kategori" onclick="tryItOut('GETapi-v1-barang-kategori');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang-kategori" onclick="cancelTryOut('GETapi-v1-barang-kategori');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang-kategori" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang-kategori</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang-kategori" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang-kategori" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/impedit" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/impedit"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/impedit'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v1-barang-images--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-barang-images--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-barang-images--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-barang-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-barang-images--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-barang-images--id-" data-method="DELETE" data-path="api/v1/barang-images/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-barang-images--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-barang-images--id-" onclick="tryItOut('DELETEapi-v1-barang-images--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-barang-images--id-" onclick="cancelTryOut('DELETEapi-v1-barang-images--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-barang-images--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/barang-images/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-barang-images--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-barang-images--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-barang-images--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/est"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/est'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v1-barang-images--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-barang-images--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-barang-images--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-barang-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-barang-images--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-barang-images--id-" data-method="PUT" data-path="api/v1/barang-images/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-barang-images--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-barang-images--id-" onclick="tryItOut('PUTapi-v1-barang-images--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-barang-images--id-" onclick="cancelTryOut('PUTapi-v1-barang-images--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-barang-images--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/barang-images/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-barang-images--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-barang-images--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-barang-images--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update partially the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/excepturi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/excepturi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/excepturi'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v1-barang-images--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-barang-images--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-barang-images--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-barang-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-barang-images--id-"></code></pre>
</div>
<form id="form-PATCHapi-v1-barang-images--id-" data-method="PATCH" data-path="api/v1/barang-images/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-barang-images--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-barang-images--id-" onclick="tryItOut('PATCHapi-v1-barang-images--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-barang-images--id-" onclick="cancelTryOut('PATCHapi-v1-barang-images--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-barang-images--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/barang-images/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v1-barang-images--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v1-barang-images--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v1-barang-images--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/veniam" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/veniam"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-images/veniam'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v1-barang-images--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang-images--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang-images--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang-images--id-"></code></pre>
</div>
<form id="form-GETapi-v1-barang-images--id-" data-method="GET" data-path="api/v1/barang-images/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang-images--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang-images--id-" onclick="tryItOut('GETapi-v1-barang-images--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang-images--id-" onclick="cancelTryOut('GETapi-v1-barang-images--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang-images--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang-images/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang-images--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang-images--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-barang-images--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-images'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v1-barang-images" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-barang-images"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-barang-images"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-barang-images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-barang-images"></code></pre>
</div>
<form id="form-POSTapi-v1-barang-images" data-method="POST" data-path="api/v1/barang-images" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-barang-images', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-barang-images" onclick="tryItOut('POSTapi-v1-barang-images');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-barang-images" onclick="cancelTryOut('POSTapi-v1-barang-images');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-barang-images" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/barang-images</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-barang-images" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-barang-images" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-images"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-images'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "Alexane Muller",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00ffcc?text=perspiciatis",
            "barang_id": 5
        },
        {
            "id": 2,
            "nama": "Jayce Romaguera",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00aa22?text=sunt",
            "barang_id": 4
        },
        {
            "id": 3,
            "nama": "Dwight Murphy",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00aa33?text=animi",
            "barang_id": 3
        },
        {
            "id": 5,
            "nama": "Mr. Cristina Gerlach",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00bb99?text=repellendus",
            "barang_id": 4
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/barang-images?page=1",
        "last": "http:\/\/localhost\/api\/v1\/barang-images?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/barang-images?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/barang-images",
        "per_page": 20,
        "to": 4,
        "total": 4
    }
}</code></pre>
<div id="execution-results-GETapi-v1-barang-images" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang-images"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang-images"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang-images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang-images"></code></pre>
</div>
<form id="form-GETapi-v1-barang-images" data-method="GET" data-path="api/v1/barang-images" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang-images', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang-images" onclick="tryItOut('GETapi-v1-barang-images');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang-images" onclick="cancelTryOut('GETapi-v1-barang-images');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang-images" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang-images</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang-images" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang-images" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status/doloribus" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status/doloribus"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-status/doloribus'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v1-barang-status--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-barang-status--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-barang-status--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-barang-status--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-barang-status--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-barang-status--id-" data-method="DELETE" data-path="api/v1/barang-status/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-barang-status--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-barang-status--id-" onclick="tryItOut('DELETEapi-v1-barang-status--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-barang-status--id-" onclick="cancelTryOut('DELETEapi-v1-barang-status--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-barang-status--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/barang-status/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-barang-status--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-barang-status--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-barang-status--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status/molestias" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status/molestias"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-status/molestias'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v1-barang-status--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-barang-status--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-barang-status--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-barang-status--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-barang-status--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-barang-status--id-" data-method="PUT" data-path="api/v1/barang-status/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-barang-status--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-barang-status--id-" onclick="tryItOut('PUTapi-v1-barang-status--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-barang-status--id-" onclick="cancelTryOut('PUTapi-v1-barang-status--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-barang-status--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/barang-status/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-barang-status--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-barang-status--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-barang-status--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status/maxime" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status/maxime"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-status/maxime'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v1-barang-status--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang-status--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang-status--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang-status--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang-status--id-"></code></pre>
</div>
<form id="form-GETapi-v1-barang-status--id-" data-method="GET" data-path="api/v1/barang-status/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang-status--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang-status--id-" onclick="tryItOut('GETapi-v1-barang-status--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang-status--id-" onclick="cancelTryOut('GETapi-v1-barang-status--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang-status--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang-status/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang-status--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang-status--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-barang-status--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-status'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v1-barang-status" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-barang-status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-barang-status"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-barang-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-barang-status"></code></pre>
</div>
<form id="form-POSTapi-v1-barang-status" data-method="POST" data-path="api/v1/barang-status" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-barang-status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-barang-status" onclick="tryItOut('POSTapi-v1-barang-status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-barang-status" onclick="cancelTryOut('POSTapi-v1-barang-status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-barang-status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/barang-status</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-barang-status" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-barang-status" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang-status"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang-status'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "hilang"
        },
        {
            "id": 2,
            "nama": "ditemukan"
        },
        {
            "id": 3,
            "nama": "didonasikan"
        },
        {
            "id": 4,
            "nama": "diklaim"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/barang-status?page=1",
        "last": "http:\/\/localhost\/api\/v1\/barang-status?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/barang-status?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/barang-status",
        "per_page": 20,
        "to": 4,
        "total": 4
    }
}</code></pre>
<div id="execution-results-GETapi-v1-barang-status" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang-status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang-status"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang-status"></code></pre>
</div>
<form id="form-GETapi-v1-barang-status" data-method="GET" data-path="api/v1/barang-status" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang-status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang-status" onclick="tryItOut('GETapi-v1-barang-status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang-status" onclick="cancelTryOut('GETapi-v1-barang-status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang-status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang-status</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang-status" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang-status" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/histories" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/histories"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/histories'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "user_id": 6,
            "barang_id": null,
            "status": "ditemukan",
            "created_at": "2020-12-06T02:09:03.000000Z",
            "updated_at": "2020-12-06T02:09:03.000000Z"
        },
        {
            "id": 2,
            "user_id": 6,
            "barang_id": null,
            "status": "ditemukan",
            "created_at": "2020-12-06T02:17:13.000000Z",
            "updated_at": "2020-12-06T02:17:13.000000Z"
        },
        {
            "id": 3,
            "user_id": 6,
            "barang_id": null,
            "status": "hilang",
            "created_at": "2020-12-06T02:24:08.000000Z",
            "updated_at": "2020-12-06T02:24:08.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/histories?page=1",
        "last": "http:\/\/localhost\/api\/v1\/histories?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/histories?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/histories",
        "per_page": 20,
        "to": 3,
        "total": 3
    }
}</code></pre>
<div id="execution-results-GETapi-v1-histories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-histories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-histories"></code></pre>
</div>
<div id="execution-error-GETapi-v1-histories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-histories"></code></pre>
</div>
<form id="form-GETapi-v1-histories" data-method="GET" data-path="api/v1/histories" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-histories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-histories" onclick="tryItOut('GETapi-v1-histories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-histories" onclick="cancelTryOut('GETapi-v1-histories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-histories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/histories</code></b>
</p>
<p>
<label id="auth-GETapi-v1-histories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-histories" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/quidem" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/quidem"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/quidem'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v1-claims--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-claims--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-claims--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-claims--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-claims--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-claims--id-" data-method="DELETE" data-path="api/v1/claims/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-claims--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-claims--id-" onclick="tryItOut('DELETEapi-v1-claims--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-claims--id-" onclick="cancelTryOut('DELETEapi-v1-claims--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-claims--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/claims/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-claims--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-claims--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-claims--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>api/v1/claims/{id}/verified</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/dolor/verified" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/dolor/verified"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/dolor/verified'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v1-claims--id--verified" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-claims--id--verified"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-claims--id--verified"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-claims--id--verified" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-claims--id--verified"></code></pre>
</div>
<form id="form-PUTapi-v1-claims--id--verified" data-method="PUT" data-path="api/v1/claims/{id}/verified" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-claims--id--verified', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-claims--id--verified" onclick="tryItOut('PUTapi-v1-claims--id--verified');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-claims--id--verified" onclick="cancelTryOut('PUTapi-v1-claims--id--verified');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-claims--id--verified" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/claims/{id}/verified</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-claims--id--verified" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-claims--id--verified" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-claims--id--verified" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/quaerat" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/quaerat"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/quaerat'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v1-claims--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-claims--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-claims--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-claims--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-claims--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-claims--id-" data-method="PUT" data-path="api/v1/claims/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-claims--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-claims--id-" onclick="tryItOut('PUTapi-v1-claims--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-claims--id-" onclick="cancelTryOut('PUTapi-v1-claims--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-claims--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/claims/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-claims--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-claims--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-claims--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update partially the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/vel" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/vel"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/vel'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v1-claims--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-claims--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-claims--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-claims--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-claims--id-"></code></pre>
</div>
<form id="form-PATCHapi-v1-claims--id-" data-method="PATCH" data-path="api/v1/claims/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-claims--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-claims--id-" onclick="tryItOut('PATCHapi-v1-claims--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-claims--id-" onclick="cancelTryOut('PATCHapi-v1-claims--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-claims--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/claims/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v1-claims--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v1-claims--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v1-claims--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/claims/nulla" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/nulla"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/nulla'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v1-claims--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-claims--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-claims--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-claims--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-claims--id-"></code></pre>
</div>
<form id="form-GETapi-v1-claims--id-" data-method="GET" data-path="api/v1/claims/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-claims--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-claims--id-" onclick="tryItOut('GETapi-v1-claims--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-claims--id-" onclick="cancelTryOut('GETapi-v1-claims--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-claims--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/claims/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-claims--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-claims--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-claims--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v1-claims" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-claims"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-claims"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-claims" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-claims"></code></pre>
</div>
<form id="form-POSTapi-v1-claims" data-method="POST" data-path="api/v1/claims" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-claims', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-claims" onclick="tryItOut('POSTapi-v1-claims');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-claims" onclick="cancelTryOut('POSTapi-v1-claims');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-claims" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/claims</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-claims" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-claims" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/claims" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 3,
            "alamat": "wkwkw",
            "no_telp": "08",
            "uri_tiket": "",
            "verified": 0,
            "created_at": "2020-12-09T08:05:27.000000Z",
            "updated_at": "2020-12-09T08:05:27.000000Z",
            "user_id": 1,
            "barang_id": 3,
            "barang": {
                "id": 3,
                "nama_barang": "Clair Rowe Updated Partially"
            }
        },
        {
            "id": 4,
            "alamat": "wkwkw",
            "no_telp": "08",
            "uri_tiket": "",
            "verified": 0,
            "created_at": "2020-12-09T08:05:39.000000Z",
            "updated_at": "2020-12-09T08:05:39.000000Z",
            "user_id": 1,
            "barang_id": 3,
            "barang": {
                "id": 3,
                "nama_barang": "Clair Rowe Updated Partially"
            }
        },
        {
            "id": 5,
            "alamat": "wkwkw",
            "no_telp": "08",
            "uri_tiket": "",
            "verified": 0,
            "created_at": "2020-12-09T08:05:41.000000Z",
            "updated_at": "2020-12-09T08:05:41.000000Z",
            "user_id": 1,
            "barang_id": 3,
            "barang": {
                "id": 3,
                "nama_barang": "Clair Rowe Updated Partially"
            }
        },
        {
            "id": 6,
            "alamat": "wkwkw",
            "no_telp": "08",
            "uri_tiket": "",
            "verified": 0,
            "created_at": "2020-12-09T08:05:43.000000Z",
            "updated_at": "2020-12-09T08:05:43.000000Z",
            "user_id": 1,
            "barang_id": 3,
            "barang": {
                "id": 3,
                "nama_barang": "Clair Rowe Updated Partially"
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/claims?page=1",
        "last": "http:\/\/localhost\/api\/v1\/claims?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/claims?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/claims",
        "per_page": 20,
        "to": 4,
        "total": 4
    }
}</code></pre>
<div id="execution-results-GETapi-v1-claims" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-claims"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-claims"></code></pre>
</div>
<div id="execution-error-GETapi-v1-claims" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-claims"></code></pre>
</div>
<form id="form-GETapi-v1-claims" data-method="GET" data-path="api/v1/claims" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-claims', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-claims" onclick="tryItOut('GETapi-v1-claims');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-claims" onclick="cancelTryOut('GETapi-v1-claims');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-claims" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/claims</code></b>
</p>
<p>
<label id="auth-GETapi-v1-claims" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-claims" data-component="header"></label>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/commodi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/commodi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/commodi'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v2-web-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-web-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-web-users--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-web-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-web-users--id-"></code></pre>
</div>
<form id="form-GETapi-v2-web-users--id-" data-method="GET" data-path="api/v2/web/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-web-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-web-users--id-" onclick="tryItOut('GETapi-v2-web-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-web-users--id-" onclick="cancelTryOut('GETapi-v2-web-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-web-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/web/users/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v2-web-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-web-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v2-web-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/modi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/modi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/modi'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v2-web-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v2-web-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v2-web-users--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v2-web-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v2-web-users--id-"></code></pre>
</div>
<form id="form-PUTapi-v2-web-users--id-" data-method="PUT" data-path="api/v2/web/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v2-web-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v2-web-users--id-" onclick="tryItOut('PUTapi-v2-web-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v2-web-users--id-" onclick="cancelTryOut('PUTapi-v2-web-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v2-web-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v2/web/users/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v2-web-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v2-web-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v2-web-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>api/v2/web/users/{id}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/eum" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/eum"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/eum'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v2-web-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v2-web-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v2-web-users--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v2-web-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v2-web-users--id-"></code></pre>
</div>
<form id="form-DELETEapi-v2-web-users--id-" data-method="DELETE" data-path="api/v2/web/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v2-web-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v2-web-users--id-" onclick="tryItOut('DELETEapi-v2-web-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v2-web-users--id-" onclick="cancelTryOut('DELETEapi-v2-web-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v2-web-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v2/web/users/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v2-web-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v2-web-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v2-web-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/omnis" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/omnis"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/omnis'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v2-web-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v2-web-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v2-web-users--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v2-web-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v2-web-users--id-"></code></pre>
</div>
<form id="form-PATCHapi-v2-web-users--id-" data-method="PATCH" data-path="api/v2/web/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v2-web-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v2-web-users--id-" onclick="tryItOut('PATCHapi-v2-web-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v2-web-users--id-" onclick="cancelTryOut('PATCHapi-v2-web-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v2-web-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v2/web/users/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v2-web-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v2-web-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v2-web-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>api/v2/web/users/{id}/restore</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/sint/restore" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/sint/restore"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/sint/restore'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v2-web-users--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v2-web-users--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v2-web-users--id--restore"></code></pre>
</div>
<div id="execution-error-PATCHapi-v2-web-users--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v2-web-users--id--restore"></code></pre>
</div>
<form id="form-PATCHapi-v2-web-users--id--restore" data-method="PATCH" data-path="api/v2/web/users/{id}/restore" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v2-web-users--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v2-web-users--id--restore" onclick="tryItOut('PATCHapi-v2-web-users--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v2-web-users--id--restore" onclick="cancelTryOut('PATCHapi-v2-web-users--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v2-web-users--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v2/web/users/{id}/restore</code></b>
</p>
<p>
<label id="auth-PATCHapi-v2-web-users--id--restore" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v2-web-users--id--restore" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v2-web-users--id--restore" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 6,
            "nama": "Sammy Wolf",
            "nip": "4556066534106639",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00bb33?text=voluptate",
            "role": 2,
            "stasiun_id": null
        },
        {
            "id": 8,
            "nama": "Tono",
            "nip": "124",
            "image": "",
            "role": 1,
            "stasiun_id": null
        },
        {
            "id": 9,
            "nama": "Tono",
            "nip": "125",
            "image": "",
            "role": 1,
            "stasiun_id": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v2\/web\/users?page=1",
        "last": "http:\/\/localhost\/api\/v2\/web\/users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/web\/users?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/web\/users",
        "per_page": 20,
        "to": 3,
        "total": 3
    }
}</code></pre>
<div id="execution-results-GETapi-v2-web-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-web-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-web-users"></code></pre>
</div>
<div id="execution-error-GETapi-v2-web-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-web-users"></code></pre>
</div>
<form id="form-GETapi-v2-web-users" data-method="GET" data-path="api/v2/web/users" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-web-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-web-users" onclick="tryItOut('GETapi-v2-web-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-web-users" onclick="cancelTryOut('GETapi-v2-web-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-web-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/web/users</code></b>
</p>
<p>
<label id="auth-GETapi-v2-web-users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-web-users" data-component="header"></label>
</p>
</form>
<h2>api/v2/web/auth/login</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/login" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/login"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/login'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-web-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-web-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-web-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-web-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-web-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v2-web-auth-login" data-method="POST" data-path="api/v2/web/auth/login" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-web-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-web-auth-login" onclick="tryItOut('POSTapi-v2-web-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-web-auth-login" onclick="cancelTryOut('POSTapi-v2-web-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-web-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/web/auth/login</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-web-auth-login" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-web-auth-login" data-component="header"></label>
</p>
</form>
<h2>api/v2/web/auth/register</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/register" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/register"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/register'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-web-auth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-web-auth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-web-auth-register"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-web-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-web-auth-register"></code></pre>
</div>
<form id="form-POSTapi-v2-web-auth-register" data-method="POST" data-path="api/v2/web/auth/register" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-web-auth-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-web-auth-register" onclick="tryItOut('POSTapi-v2-web-auth-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-web-auth-register" onclick="cancelTryOut('POSTapi-v2-web-auth-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-web-auth-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/web/auth/register</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-web-auth-register" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-web-auth-register" data-component="header"></label>
</p>
</form>
<h2>api/v2/web/auth/logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<div id="execution-results-GETapi-v2-web-auth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-web-auth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-web-auth-logout"></code></pre>
</div>
<div id="execution-error-GETapi-v2-web-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-web-auth-logout"></code></pre>
</div>
<form id="form-GETapi-v2-web-auth-logout" data-method="GET" data-path="api/v2/web/auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-web-auth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-web-auth-logout" onclick="tryItOut('GETapi-v2-web-auth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-web-auth-logout" onclick="cancelTryOut('GETapi-v2-web-auth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-web-auth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/web/auth/logout</code></b>
</p>
</form>
<h2>api/v2/web/auth/refresh</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<div id="execution-results-GETapi-v2-web-auth-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-web-auth-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-web-auth-refresh"></code></pre>
</div>
<div id="execution-error-GETapi-v2-web-auth-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-web-auth-refresh"></code></pre>
</div>
<form id="form-GETapi-v2-web-auth-refresh" data-method="GET" data-path="api/v2/web/auth/refresh" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-web-auth-refresh', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-web-auth-refresh" onclick="tryItOut('GETapi-v2-web-auth-refresh');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-web-auth-refresh" onclick="cancelTryOut('GETapi-v2-web-auth-refresh');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-web-auth-refresh" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/web/auth/refresh</code></b>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/sed" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/sed"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users/sed'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v2-android-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-users--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-users--id-"></code></pre>
</div>
<form id="form-GETapi-v2-android-users--id-" data-method="GET" data-path="api/v2/android/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-android-users--id-" onclick="tryItOut('GETapi-v2-android-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-android-users--id-" onclick="cancelTryOut('GETapi-v2-android-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-android-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/android/users/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v2-android-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-android-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v2-android-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/autem" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/autem"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users/autem'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v2-android-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v2-android-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v2-android-users--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v2-android-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v2-android-users--id-"></code></pre>
</div>
<form id="form-PUTapi-v2-android-users--id-" data-method="PUT" data-path="api/v2/android/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v2-android-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v2-android-users--id-" onclick="tryItOut('PUTapi-v2-android-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v2-android-users--id-" onclick="cancelTryOut('PUTapi-v2-android-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v2-android-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v2/android/users/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v2-android-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v2-android-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v2-android-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update partially the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/molestiae" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/molestiae"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users/molestiae'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v2-android-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v2-android-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v2-android-users--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v2-android-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v2-android-users--id-"></code></pre>
</div>
<form id="form-PATCHapi-v2-android-users--id-" data-method="PATCH" data-path="api/v2/android/users/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v2-android-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v2-android-users--id-" onclick="tryItOut('PATCHapi-v2-android-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v2-android-users--id-" onclick="cancelTryOut('PATCHapi-v2-android-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v2-android-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v2/android/users/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v2-android-users--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v2-android-users--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v2-android-users--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "Pierre Jacobi",
            "email": "cebert@gmail.com",
            "email_verified_at": "2020-12-04T15:26:50.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0011ff?text=rerum"
        },
        {
            "id": 2,
            "nama": "Ted Johns",
            "email": "merlin35@yahoo.com",
            "email_verified_at": "2020-12-04T15:26:50.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00cc88?text=quisquam"
        },
        {
            "id": 3,
            "nama": "Carter Sporer",
            "email": "jordy.keeling@gmail.com",
            "email_verified_at": "2020-12-04T15:26:51.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/004433?text=quo"
        },
        {
            "id": 4,
            "nama": "Marlin Gleichner II",
            "email": "gorn@yahoo.com",
            "email_verified_at": "2020-12-04T15:26:51.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0077bb?text=aliquam"
        },
        {
            "id": 5,
            "nama": "Polly Dickinson",
            "email": "noemi.reilly@gmail.com",
            "email_verified_at": "2020-12-04T15:26:52.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/003355?text=ex"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v2\/android\/users?page=1",
        "last": "http:\/\/localhost\/api\/v2\/android\/users?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/android\/users?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/android\/users",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}</code></pre>
<div id="execution-results-GETapi-v2-android-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-users"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-users"></code></pre>
</div>
<form id="form-GETapi-v2-android-users" data-method="GET" data-path="api/v2/android/users" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-android-users" onclick="tryItOut('GETapi-v2-android-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-android-users" onclick="cancelTryOut('GETapi-v2-android-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-android-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/android/users</code></b>
</p>
<p>
<label id="auth-GETapi-v2-android-users" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-android-users" data-component="header"></label>
</p>
</form>
<h2>api/v2/android/auth/login</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/login" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/login"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/login'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-android-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-android-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-android-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-android-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-android-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v2-android-auth-login" data-method="POST" data-path="api/v2/android/auth/login" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-android-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-android-auth-login" onclick="tryItOut('POSTapi-v2-android-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-android-auth-login" onclick="cancelTryOut('POSTapi-v2-android-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-android-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/android/auth/login</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-android-auth-login" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-android-auth-login" data-component="header"></label>
</p>
</form>
<h2>api/v2/android/auth/register</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/register" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/register"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/register'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-android-auth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-android-auth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-android-auth-register"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-android-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-android-auth-register"></code></pre>
</div>
<form id="form-POSTapi-v2-android-auth-register" data-method="POST" data-path="api/v2/android/auth/register" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-android-auth-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-android-auth-register" onclick="tryItOut('POSTapi-v2-android-auth-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-android-auth-register" onclick="cancelTryOut('POSTapi-v2-android-auth-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-android-auth-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/android/auth/register</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-android-auth-register" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-android-auth-register" data-component="header"></label>
</p>
</form>
<h2>api/v2/android/auth/logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<div id="execution-results-GETapi-v2-android-auth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-auth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-auth-logout"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-auth-logout"></code></pre>
</div>
<form id="form-GETapi-v2-android-auth-logout" data-method="GET" data-path="api/v2/android/auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-auth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-android-auth-logout" onclick="tryItOut('GETapi-v2-android-auth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-android-auth-logout" onclick="cancelTryOut('GETapi-v2-android-auth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-android-auth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/android/auth/logout</code></b>
</p>
</form>
<h2>api/v2/android/auth/refresh</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<div id="execution-results-GETapi-v2-android-auth-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-auth-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-auth-refresh"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-auth-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-auth-refresh"></code></pre>
</div>
<form id="form-GETapi-v2-android-auth-refresh" data-method="GET" data-path="api/v2/android/auth/refresh" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-auth-refresh', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-android-auth-refresh" onclick="tryItOut('GETapi-v2-android-auth-refresh');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-android-auth-refresh" onclick="cancelTryOut('GETapi-v2-android-auth-refresh');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-android-auth-refresh" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/android/auth/refresh</code></b>
</p>
</form>
<h2>api/v2/android/auth/verify/{token}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/verify/corrupti" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/verify/corrupti"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/verify/corrupti'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Wrong number of segments"
}</code></pre>
<div id="execution-results-GETapi-v2-android-auth-verify--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-auth-verify--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-auth-verify--token-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-auth-verify--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-auth-verify--token-"></code></pre>
</div>
<form id="form-GETapi-v2-android-auth-verify--token-" data-method="GET" data-path="api/v2/android/auth/verify/{token}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-auth-verify--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-android-auth-verify--token-" onclick="tryItOut('GETapi-v2-android-auth-verify--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-android-auth-verify--token-" onclick="cancelTryOut('GETapi-v2-android-auth-verify--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-android-auth-verify--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/android/auth/verify/{token}</code></b>
</p>
<p>
<label id="auth-GETapi-v2-android-auth-verify--token-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-android-auth-verify--token-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETapi-v2-android-auth-verify--token-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>api/v2/android/auth/reset-password</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-android-auth-reset-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-android-auth-reset-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-android-auth-reset-password"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-android-auth-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-android-auth-reset-password"></code></pre>
</div>
<form id="form-POSTapi-v2-android-auth-reset-password" data-method="POST" data-path="api/v2/android/auth/reset-password" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-android-auth-reset-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-android-auth-reset-password" onclick="tryItOut('POSTapi-v2-android-auth-reset-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-android-auth-reset-password" onclick="cancelTryOut('POSTapi-v2-android-auth-reset-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-android-auth-reset-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/android/auth/reset-password</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-android-auth-reset-password" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-android-auth-reset-password" data-component="header"></label>
</p>
</form>
<h2>api/v2/android/auth/reset-password/{token}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/placeat" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/placeat"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/placeat'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
&lt;style&gt;
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;div&gt;
  &lt;div class="container"&gt;
    &lt;h1&gt;Reset Password&lt;/h1&gt;
    &lt;p&gt;Please fill in this form to reset your password.&lt;/p&gt;
    &lt;hr&gt;

    &lt;input type="password" placeholder="New Password" name="psw" id="psw" required&gt;

    &lt;button onclick="resetPassword()" class="registerbtn"&gt;Reset Password&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
    function getPath(){
        return window.location.href
    }
    function jsonRequest(method, URI, payload, oncomplete) {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = oncomplete;
        xhttp.open(method, URI, true)
        xhttp.setRequestHeader("Content-type", "application/json; charset=utf-8");
        if (payload) {
            xhttp.send(payload);
            return;
        }
        xhttp.send()
    }
    function resetPassword() {
        let newPassword = document.getElementById("psw").value.trim();
        jsonRequest('POST', getPath(), JSON.stringify({"password": newPassword}), function() {
            if (this.readyState == 4) {
                document.write(this.responseText);
            }
        });
    }
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>
<div id="execution-results-GETapi-v2-android-auth-reset-password--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-auth-reset-password--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-auth-reset-password--token-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-auth-reset-password--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-auth-reset-password--token-"></code></pre>
</div>
<form id="form-GETapi-v2-android-auth-reset-password--token-" data-method="GET" data-path="api/v2/android/auth/reset-password/{token}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-auth-reset-password--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-android-auth-reset-password--token-" onclick="tryItOut('GETapi-v2-android-auth-reset-password--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-android-auth-reset-password--token-" onclick="cancelTryOut('GETapi-v2-android-auth-reset-password--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-android-auth-reset-password--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/android/auth/reset-password/{token}</code></b>
</p>
<p>
<label id="auth-GETapi-v2-android-auth-reset-password--token-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-android-auth-reset-password--token-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETapi-v2-android-auth-reset-password--token-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>api/v2/android/auth/reset-password/{token}</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/eum" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/eum"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/eum'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-android-auth-reset-password--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-android-auth-reset-password--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-android-auth-reset-password--token-"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-android-auth-reset-password--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-android-auth-reset-password--token-"></code></pre>
</div>
<form id="form-POSTapi-v2-android-auth-reset-password--token-" data-method="POST" data-path="api/v2/android/auth/reset-password/{token}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-android-auth-reset-password--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-android-auth-reset-password--token-" onclick="tryItOut('POSTapi-v2-android-auth-reset-password--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-android-auth-reset-password--token-" onclick="cancelTryOut('POSTapi-v2-android-auth-reset-password--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-android-auth-reset-password--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/android/auth/reset-password/{token}</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-android-auth-reset-password--token-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-android-auth-reset-password--token-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTapi-v2-android-auth-reset-password--token-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>api/v2/android/auth/oauth2/google/authorize</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/oauth2/google/authorize" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/oauth2/google/authorize"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/oauth2/google/authorize'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Client error: `POST https:\/\/www.googleapis.com\/oauth2\/v4\/token` resulted in a `400 Bad Request` response:\n{\n  \"error\": \"invalid_request\",\n  \"error_description\": \"Missing required parameter: code\"\n}\n",
    "exception": "GuzzleHttp\\Exception\\ClientException",
    "trace": [
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\Middleware.php",
            "line": 69,
            "function": "create",
            "class": "GuzzleHttp\\Exception\\RequestException",
            "type": "::",
            "args": [
                {},
                {},
                null,
                [],
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 204,
            "function": "GuzzleHttp\\{closure}",
            "class": "GuzzleHttp\\Middleware",
            "type": "::",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 153,
            "function": "callHandler",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "::",
            "args": [
                1,
                {},
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\TaskQueue.php",
            "line": 48,
            "function": "GuzzleHttp\\Promise\\{closure}",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "::",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 248,
            "function": "run",
            "class": "GuzzleHttp\\Promise\\TaskQueue",
            "type": "-&gt;",
            "args": [
                true
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 224,
            "function": "invokeWaitFn",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 269,
            "function": "waitIfPending",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 226,
            "function": "invokeWaitList",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 62,
            "function": "waitIfPending",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\Client.php",
            "line": 187,
            "function": "wait",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\ClientTrait.php",
            "line": 95,
            "function": "request",
            "class": "GuzzleHttp\\Client",
            "type": "-&gt;",
            "args": [
                "POST",
                "https:\/\/www.googleapis.com\/oauth2\/v4\/token",
                {
                    "headers": {
                        "Accept": "application\/json"
                    },
                    "form_params": {
                        "grant_type": "authorization_code",
                        "client_id": "304092645592-42g8iugfoohtdgq3jqgio9h67ojb7vhh.apps.googleusercontent.com",
                        "client_secret": "noXkPSo7ZalqZoMeYJXgvnmt",
                        "code": null,
                        "redirect_uri": "http:\/\/localhost:8000\/api\/v1\/android\/auth\/oauth2\/google\/authorize"
                    },
                    "synchronous": true
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\socialite\\src\\Two\\AbstractProvider.php",
            "line": 273,
            "function": "post",
            "class": "GuzzleHttp\\Client",
            "type": "-&gt;",
            "args": [
                "https:\/\/www.googleapis.com\/oauth2\/v4\/token",
                {
                    "headers": {
                        "Accept": "application\/json"
                    },
                    "form_params": {
                        "grant_type": "authorization_code",
                        "client_id": "304092645592-42g8iugfoohtdgq3jqgio9h67ojb7vhh.apps.googleusercontent.com",
                        "client_secret": "noXkPSo7ZalqZoMeYJXgvnmt",
                        "code": null,
                        "redirect_uri": "http:\/\/localhost:8000\/api\/v1\/android\/auth\/oauth2\/google\/authorize"
                    }
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\app\\Http\\Controllers\\v2\\Android\\Oauth2Controller.php",
            "line": 30,
            "function": "getAccessTokenResponse",
            "class": "Laravel\\Socialite\\Two\\AbstractProvider",
            "type": "-&gt;",
            "args": [
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "handleGoogleCallback",
            "class": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "-&gt;",
            "args": [
                "handleGoogleCallback",
                [
                    {
                        "attributes": {},
                        "request": {},
                        "query": {},
                        "server": {},
                        "files": {},
                        "cookies": {},
                        "headers": {}
                    }
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v2\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {},
                "handleGoogleCallback"
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 692,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {},
                [
                    {
                        "key": "e7cf66797159dc3cd3e85f72e15bb551",
                        "maxAttempts": 60,
                        "decayMinutes": 1,
                        "responseCallback": null
                    }
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {},
                "api",
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {},
                "api"
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 694,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 669,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v2\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 635,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v2\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v2\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v2\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "id": "e38843f623d783f09dfd2d44a19441ad",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                },
                {
                    "methods": [
                        "GET"
                    ],
                    "config": {
                        "app.env": "documentation"
                    },
                    "queryParams": [],
                    "bodyParams": [],
                    "fileParams": [],
                    "cookies": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v2\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "e38843f623d783f09dfd2d44a19441ad",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v2\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "name": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                },
                {
                    "name": "handleGoogleCallback",
                    "class": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "e38843f623d783f09dfd2d44a19441ad",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;",
            "args": [
                "responses",
                {
                    "id": "e38843f623d783f09dfd2d44a19441ad",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                },
                [
                    {
                        "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                        "methods": [
                            "GET",
                            "HEAD"
                        ],
                        "action": {
                            "middleware": [
                                "api"
                            ],
                            "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                            "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                            "namespace": null,
                            "prefix": "api\/v2\/android\/auth",
                            "where": []
                        },
                        "isFallback": false,
                        "controller": {},
                        "defaults": [],
                        "wheres": [],
                        "parameters": [],
                        "parameterNames": [],
                        "computedMiddleware": [
                            "api"
                        ],
                        "compiled": {}
                    },
                    {
                        "name": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                    },
                    {
                        "name": "handleGoogleCallback",
                        "class": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                    },
                    {
                        "headers": {
                            "Content-Type": "application\/json",
                            "Accept": "application\/json"
                        },
                        "response_calls": {
                            "methods": [
                                "GET"
                            ],
                            "config": {
                                "app.env": "documentation"
                            },
                            "queryParams": [],
                            "bodyParams": [],
                            "fileParams": [],
                            "cookies": []
                        }
                    }
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;",
            "args": [
                {
                    "name": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                },
                {
                    "name": "handleGoogleCallback",
                    "class": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                },
                {
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v2\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "e38843f623d783f09dfd2d44a19441ad",
                    "methods": [
                        "GET"
                    ],
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "api\/v2\/android\/auth\/oauth2\/google\/authorize",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "api"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@handleGoogleCallback",
                        "namespace": null,
                        "prefix": "api\/v2\/android\/auth",
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "api"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;",
            "args": [
                [
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {}
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": [
                {
                    "contextual": []
                },
                [
                    {},
                    "handle"
                ],
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": [
                {
                    "contextual": []
                },
                [
                    {},
                    "handle"
                ],
                [],
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;",
            "args": [
                [
                    {},
                    "handle"
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-v2-android-auth-oauth2-google-authorize" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-auth-oauth2-google-authorize"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-auth-oauth2-google-authorize"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-auth-oauth2-google-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-auth-oauth2-google-authorize"></code></pre>
</div>
<form id="form-GETapi-v2-android-auth-oauth2-google-authorize" data-method="GET" data-path="api/v2/android/auth/oauth2/google/authorize" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-auth-oauth2-google-authorize', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-android-auth-oauth2-google-authorize" onclick="tryItOut('GETapi-v2-android-auth-oauth2-google-authorize');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-android-auth-oauth2-google-authorize" onclick="cancelTryOut('GETapi-v2-android-auth-oauth2-google-authorize');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-android-auth-oauth2-google-authorize" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/android/auth/oauth2/google/authorize</code></b>
</p>
<p>
<label id="auth-GETapi-v2-android-auth-oauth2-google-authorize" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-android-auth-oauth2-google-authorize" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/fuga" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/fuga"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang/fuga'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v2-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v2-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v2-barang--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v2-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v2-barang--id-"></code></pre>
</div>
<form id="form-DELETEapi-v2-barang--id-" data-method="DELETE" data-path="api/v2/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v2-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v2-barang--id-" onclick="tryItOut('DELETEapi-v2-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v2-barang--id-" onclick="cancelTryOut('DELETEapi-v2-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v2-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v2/barang/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v2-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v2-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v2-barang--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/autem" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/autem"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang/autem'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v2-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v2-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v2-barang--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v2-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v2-barang--id-"></code></pre>
</div>
<form id="form-PUTapi-v2-barang--id-" data-method="PUT" data-path="api/v2/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v2-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v2-barang--id-" onclick="tryItOut('PUTapi-v2-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v2-barang--id-" onclick="cancelTryOut('PUTapi-v2-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v2-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v2/barang/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v2-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v2-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v2-barang--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update partially the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/et" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/et"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang/et'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v2-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v2-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v2-barang--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v2-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v2-barang--id-"></code></pre>
</div>
<form id="form-PATCHapi-v2-barang--id-" data-method="PATCH" data-path="api/v2/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v2-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v2-barang--id-" onclick="tryItOut('PATCHapi-v2-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v2-barang--id-" onclick="cancelTryOut('PATCHapi-v2-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v2-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v2/barang/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v2-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v2-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v2-barang--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang/eligendi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/eligendi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang/eligendi'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v2-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-barang--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-barang--id-"></code></pre>
</div>
<form id="form-GETapi-v2-barang--id-" data-method="GET" data-path="api/v2/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-barang--id-" onclick="tryItOut('GETapi-v2-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-barang--id-" onclick="cancelTryOut('GETapi-v2-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/barang/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v2-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v2-barang--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-barang" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-barang"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-barang"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-barang" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-barang"></code></pre>
</div>
<form id="form-POSTapi-v2-barang" data-method="POST" data-path="api/v2/barang" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-barang', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-barang" onclick="tryItOut('POSTapi-v2-barang');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-barang" onclick="cancelTryOut('POSTapi-v2-barang');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-barang" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/barang</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-barang" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-barang" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 3,
            "nama_barang": "Clair Rowe Updated Partially",
            "tanggal": "2020-12-04",
            "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
            "warna": "Salmon",
            "merek": "Heaney-Hansen",
            "user_id": 5,
            "status_id": 4,
            "kategori_id": 3,
            "stasiun": {
                "id": 4,
                "nama": "Lou Gutmann"
            }
        },
        {
            "id": 4,
            "nama_barang": "Howell Herman",
            "tanggal": "2020-12-04",
            "lokasi": "86652 Kovacek Lane Suite 799\nZiemehaven, NM 82483-6929",
            "warna": "CadetBlue",
            "merek": "Beier-Green",
            "user_id": 1,
            "status_id": 1,
            "kategori_id": 2,
            "stasiun": {
                "id": 5,
                "nama": "Taurean Davis I"
            }
        },
        {
            "id": 5,
            "nama_barang": "Jacques Dietrich DVM",
            "tanggal": "2020-12-04",
            "lokasi": "63070 Christiansen Viaduct\nMargarettachester, MT 82331-1192",
            "warna": "PapayaWhip",
            "merek": "Orn-Herman",
            "user_id": 6,
            "status_id": 4,
            "kategori_id": 2,
            "stasiun": {
                "id": 3,
                "nama": "Delia Pollich Jr."
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v2\/barang?page=1",
        "last": "http:\/\/localhost\/api\/v2\/barang?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/barang?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/barang",
        "per_page": 20,
        "to": 3,
        "total": 3
    }
}</code></pre>
<div id="execution-results-GETapi-v2-barang" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-barang"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-barang"></code></pre>
</div>
<div id="execution-error-GETapi-v2-barang" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-barang"></code></pre>
</div>
<form id="form-GETapi-v2-barang" data-method="GET" data-path="api/v2/barang" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-barang', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-barang" onclick="tryItOut('GETapi-v2-barang');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-barang" onclick="cancelTryOut('GETapi-v2-barang');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-barang" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/barang</code></b>
</p>
<p>
<label id="auth-GETapi-v2-barang" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-barang" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/quibusdam" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/quibusdam"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/quibusdam'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v2-stasiun--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v2-stasiun--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v2-stasiun--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v2-stasiun--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v2-stasiun--id-"></code></pre>
</div>
<form id="form-DELETEapi-v2-stasiun--id-" data-method="DELETE" data-path="api/v2/stasiun/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v2-stasiun--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v2-stasiun--id-" onclick="tryItOut('DELETEapi-v2-stasiun--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v2-stasiun--id-" onclick="cancelTryOut('DELETEapi-v2-stasiun--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v2-stasiun--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v2/stasiun/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v2-stasiun--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v2-stasiun--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v2-stasiun--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/molestiae" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/molestiae"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/molestiae'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v2-stasiun--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v2-stasiun--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v2-stasiun--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v2-stasiun--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v2-stasiun--id-"></code></pre>
</div>
<form id="form-PUTapi-v2-stasiun--id-" data-method="PUT" data-path="api/v2/stasiun/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v2-stasiun--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v2-stasiun--id-" onclick="tryItOut('PUTapi-v2-stasiun--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v2-stasiun--id-" onclick="cancelTryOut('PUTapi-v2-stasiun--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v2-stasiun--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v2/stasiun/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v2-stasiun--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v2-stasiun--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v2-stasiun--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/ea" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/ea"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/ea'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v2-stasiun--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-stasiun--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-stasiun--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-stasiun--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-stasiun--id-"></code></pre>
</div>
<form id="form-GETapi-v2-stasiun--id-" data-method="GET" data-path="api/v2/stasiun/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-stasiun--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-stasiun--id-" onclick="tryItOut('GETapi-v2-stasiun--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-stasiun--id-" onclick="cancelTryOut('GETapi-v2-stasiun--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-stasiun--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/stasiun/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v2-stasiun--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-stasiun--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v2-stasiun--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-stasiun" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-stasiun"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-stasiun"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-stasiun" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-stasiun"></code></pre>
</div>
<form id="form-POSTapi-v2-stasiun" data-method="POST" data-path="api/v2/stasiun" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-stasiun', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-stasiun" onclick="tryItOut('POSTapi-v2-stasiun');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-stasiun" onclick="cancelTryOut('POSTapi-v2-stasiun');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-stasiun" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/stasiun</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-stasiun" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-stasiun" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "Bobbie Haley V"
        },
        {
            "id": 2,
            "nama": "Filiberto Predovic"
        },
        {
            "id": 3,
            "nama": "Delia Pollich Jr."
        },
        {
            "id": 4,
            "nama": "Lou Gutmann"
        },
        {
            "id": 5,
            "nama": "Taurean Davis I"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v2\/stasiun?page=1",
        "last": "http:\/\/localhost\/api\/v2\/stasiun?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/stasiun?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/stasiun",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}</code></pre>
<div id="execution-results-GETapi-v2-stasiun" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-stasiun"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-stasiun"></code></pre>
</div>
<div id="execution-error-GETapi-v2-stasiun" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-stasiun"></code></pre>
</div>
<form id="form-GETapi-v2-stasiun" data-method="GET" data-path="api/v2/stasiun" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-stasiun', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-stasiun" onclick="tryItOut('GETapi-v2-stasiun');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-stasiun" onclick="cancelTryOut('GETapi-v2-stasiun');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-stasiun" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/stasiun</code></b>
</p>
<p>
<label id="auth-GETapi-v2-stasiun" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-stasiun" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/eius" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/eius"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/eius'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v2-barang-kategori--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v2-barang-kategori--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v2-barang-kategori--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v2-barang-kategori--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v2-barang-kategori--id-"></code></pre>
</div>
<form id="form-DELETEapi-v2-barang-kategori--id-" data-method="DELETE" data-path="api/v2/barang-kategori/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v2-barang-kategori--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v2-barang-kategori--id-" onclick="tryItOut('DELETEapi-v2-barang-kategori--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v2-barang-kategori--id-" onclick="cancelTryOut('DELETEapi-v2-barang-kategori--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v2-barang-kategori--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v2/barang-kategori/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v2-barang-kategori--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v2-barang-kategori--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v2-barang-kategori--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/est" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/est"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/est'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v2-barang-kategori--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v2-barang-kategori--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v2-barang-kategori--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v2-barang-kategori--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v2-barang-kategori--id-"></code></pre>
</div>
<form id="form-PUTapi-v2-barang-kategori--id-" data-method="PUT" data-path="api/v2/barang-kategori/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v2-barang-kategori--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v2-barang-kategori--id-" onclick="tryItOut('PUTapi-v2-barang-kategori--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v2-barang-kategori--id-" onclick="cancelTryOut('PUTapi-v2-barang-kategori--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v2-barang-kategori--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v2/barang-kategori/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v2-barang-kategori--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v2-barang-kategori--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v2-barang-kategori--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/ut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/ut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/ut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v2-barang-kategori--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-barang-kategori--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-barang-kategori--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-barang-kategori--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-barang-kategori--id-"></code></pre>
</div>
<form id="form-GETapi-v2-barang-kategori--id-" data-method="GET" data-path="api/v2/barang-kategori/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-barang-kategori--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-barang-kategori--id-" onclick="tryItOut('GETapi-v2-barang-kategori--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-barang-kategori--id-" onclick="cancelTryOut('GETapi-v2-barang-kategori--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-barang-kategori--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/barang-kategori/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v2-barang-kategori--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-barang-kategori--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v2-barang-kategori--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-barang-kategori" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-barang-kategori"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-barang-kategori"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-barang-kategori" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-barang-kategori"></code></pre>
</div>
<form id="form-POSTapi-v2-barang-kategori" data-method="POST" data-path="api/v2/barang-kategori" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-barang-kategori', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-barang-kategori" onclick="tryItOut('POSTapi-v2-barang-kategori');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-barang-kategori" onclick="cancelTryOut('POSTapi-v2-barang-kategori');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-barang-kategori" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/barang-kategori</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-barang-kategori" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-barang-kategori" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "Desmond Hilpert"
        },
        {
            "id": 2,
            "nama": "Eryn Stark"
        },
        {
            "id": 3,
            "nama": "Mr. Toby Fadel"
        },
        {
            "id": 4,
            "nama": "Willie Muller"
        },
        {
            "id": 5,
            "nama": "Veda Botsford"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v2\/barang-kategori?page=1",
        "last": "http:\/\/localhost\/api\/v2\/barang-kategori?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/barang-kategori?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/barang-kategori",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}</code></pre>
<div id="execution-results-GETapi-v2-barang-kategori" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-barang-kategori"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-barang-kategori"></code></pre>
</div>
<div id="execution-error-GETapi-v2-barang-kategori" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-barang-kategori"></code></pre>
</div>
<form id="form-GETapi-v2-barang-kategori" data-method="GET" data-path="api/v2/barang-kategori" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-barang-kategori', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-barang-kategori" onclick="tryItOut('GETapi-v2-barang-kategori');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-barang-kategori" onclick="cancelTryOut('GETapi-v2-barang-kategori');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-barang-kategori" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/barang-kategori</code></b>
</p>
<p>
<label id="auth-GETapi-v2-barang-kategori" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-barang-kategori" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/omnis" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/omnis"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/omnis'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v2-barang-images--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v2-barang-images--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v2-barang-images--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v2-barang-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v2-barang-images--id-"></code></pre>
</div>
<form id="form-DELETEapi-v2-barang-images--id-" data-method="DELETE" data-path="api/v2/barang-images/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v2-barang-images--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v2-barang-images--id-" onclick="tryItOut('DELETEapi-v2-barang-images--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v2-barang-images--id-" onclick="cancelTryOut('DELETEapi-v2-barang-images--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v2-barang-images--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v2/barang-images/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v2-barang-images--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v2-barang-images--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v2-barang-images--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/doloremque" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/doloremque"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/doloremque'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v2-barang-images--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v2-barang-images--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v2-barang-images--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v2-barang-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v2-barang-images--id-"></code></pre>
</div>
<form id="form-PUTapi-v2-barang-images--id-" data-method="PUT" data-path="api/v2/barang-images/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v2-barang-images--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v2-barang-images--id-" onclick="tryItOut('PUTapi-v2-barang-images--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v2-barang-images--id-" onclick="cancelTryOut('PUTapi-v2-barang-images--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v2-barang-images--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v2/barang-images/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v2-barang-images--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v2-barang-images--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v2-barang-images--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update partially the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/eligendi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/eligendi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/eligendi'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PATCHapi-v2-barang-images--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v2-barang-images--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v2-barang-images--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v2-barang-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v2-barang-images--id-"></code></pre>
</div>
<form id="form-PATCHapi-v2-barang-images--id-" data-method="PATCH" data-path="api/v2/barang-images/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v2-barang-images--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v2-barang-images--id-" onclick="tryItOut('PATCHapi-v2-barang-images--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v2-barang-images--id-" onclick="cancelTryOut('PATCHapi-v2-barang-images--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v2-barang-images--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v2/barang-images/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v2-barang-images--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v2-barang-images--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-v2-barang-images--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/et" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/et"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/et'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v2-barang-images--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-barang-images--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-barang-images--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-barang-images--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-barang-images--id-"></code></pre>
</div>
<form id="form-GETapi-v2-barang-images--id-" data-method="GET" data-path="api/v2/barang-images/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-barang-images--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-barang-images--id-" onclick="tryItOut('GETapi-v2-barang-images--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-barang-images--id-" onclick="cancelTryOut('GETapi-v2-barang-images--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-barang-images--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/barang-images/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v2-barang-images--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-barang-images--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v2-barang-images--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-barang-images" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-barang-images"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-barang-images"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-barang-images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-barang-images"></code></pre>
</div>
<form id="form-POSTapi-v2-barang-images" data-method="POST" data-path="api/v2/barang-images" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-barang-images', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-barang-images" onclick="tryItOut('POSTapi-v2-barang-images');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-barang-images" onclick="cancelTryOut('POSTapi-v2-barang-images');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-barang-images" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/barang-images</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-barang-images" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-barang-images" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "Alexane Muller",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00ffcc?text=perspiciatis",
            "barang_id": 5
        },
        {
            "id": 2,
            "nama": "Jayce Romaguera",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00aa22?text=sunt",
            "barang_id": 4
        },
        {
            "id": 3,
            "nama": "Dwight Murphy",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00aa33?text=animi",
            "barang_id": 3
        },
        {
            "id": 5,
            "nama": "Mr. Cristina Gerlach",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00bb99?text=repellendus",
            "barang_id": 4
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v2\/barang-images?page=1",
        "last": "http:\/\/localhost\/api\/v2\/barang-images?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/barang-images?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/barang-images",
        "per_page": 20,
        "to": 4,
        "total": 4
    }
}</code></pre>
<div id="execution-results-GETapi-v2-barang-images" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-barang-images"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-barang-images"></code></pre>
</div>
<div id="execution-error-GETapi-v2-barang-images" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-barang-images"></code></pre>
</div>
<form id="form-GETapi-v2-barang-images" data-method="GET" data-path="api/v2/barang-images" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-barang-images', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-barang-images" onclick="tryItOut('GETapi-v2-barang-images');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-barang-images" onclick="cancelTryOut('GETapi-v2-barang-images');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-barang-images" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/barang-images</code></b>
</p>
<p>
<label id="auth-GETapi-v2-barang-images" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-barang-images" data-component="header"></label>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/et" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/et"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/et'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-DELETEapi-v2-barang-status--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v2-barang-status--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v2-barang-status--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v2-barang-status--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v2-barang-status--id-"></code></pre>
</div>
<form id="form-DELETEapi-v2-barang-status--id-" data-method="DELETE" data-path="api/v2/barang-status/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v2-barang-status--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v2-barang-status--id-" onclick="tryItOut('DELETEapi-v2-barang-status--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v2-barang-status--id-" onclick="cancelTryOut('DELETEapi-v2-barang-status--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v2-barang-status--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v2/barang-status/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v2-barang-status--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v2-barang-status--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v2-barang-status--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/ut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/ut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/ut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-PUTapi-v2-barang-status--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v2-barang-status--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v2-barang-status--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v2-barang-status--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v2-barang-status--id-"></code></pre>
</div>
<form id="form-PUTapi-v2-barang-status--id-" data-method="PUT" data-path="api/v2/barang-status/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v2-barang-status--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v2-barang-status--id-" onclick="tryItOut('PUTapi-v2-barang-status--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v2-barang-status--id-" onclick="cancelTryOut('PUTapi-v2-barang-status--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v2-barang-status--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v2/barang-status/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v2-barang-status--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v2-barang-status--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v2-barang-status--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/explicabo" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/explicabo"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/explicabo'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v2-barang-status--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-barang-status--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-barang-status--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-barang-status--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-barang-status--id-"></code></pre>
</div>
<form id="form-GETapi-v2-barang-status--id-" data-method="GET" data-path="api/v2/barang-status/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-barang-status--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-barang-status--id-" onclick="tryItOut('GETapi-v2-barang-status--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-barang-status--id-" onclick="cancelTryOut('GETapi-v2-barang-status--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-barang-status--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/barang-status/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v2-barang-status--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-barang-status--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v2-barang-status--id-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<div id="execution-results-POSTapi-v2-barang-status" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-barang-status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-barang-status"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-barang-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-barang-status"></code></pre>
</div>
<form id="form-POSTapi-v2-barang-status" data-method="POST" data-path="api/v2/barang-status" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-barang-status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v2-barang-status" onclick="tryItOut('POSTapi-v2-barang-status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v2-barang-status" onclick="cancelTryOut('POSTapi-v2-barang-status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v2-barang-status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v2/barang-status</code></b>
</p>
<p>
<label id="auth-POSTapi-v2-barang-status" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v2-barang-status" data-component="header"></label>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "nama": "hilang"
        },
        {
            "id": 2,
            "nama": "ditemukan"
        },
        {
            "id": 3,
            "nama": "didonasikan"
        },
        {
            "id": 4,
            "nama": "diklaim"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v2\/barang-status?page=1",
        "last": "http:\/\/localhost\/api\/v2\/barang-status?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/barang-status?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/barang-status",
        "per_page": 20,
        "to": 4,
        "total": 4
    }
}</code></pre>
<div id="execution-results-GETapi-v2-barang-status" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-barang-status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-barang-status"></code></pre>
</div>
<div id="execution-error-GETapi-v2-barang-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-barang-status"></code></pre>
</div>
<form id="form-GETapi-v2-barang-status" data-method="GET" data-path="api/v2/barang-status" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-barang-status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v2-barang-status" onclick="tryItOut('GETapi-v2-barang-status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v2-barang-status" onclick="cancelTryOut('GETapi-v2-barang-status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v2-barang-status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v2/barang-status</code></b>
</p>
<p>
<label id="auth-GETapi-v2-barang-status" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-barang-status" data-component="header"></label>
</p>
</form>
<h2>auth/oauth2/google</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/auth/oauth2/google" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/auth/oauth2/google"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/auth/oauth2/google'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Session store not set on request.",
    "class": "RuntimeException",
    "trace": [
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\socialite\\src\\Two\\AbstractProvider.php",
            "line": 158,
            "function": "session",
            "class": "Illuminate\\Http\\Request",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\app\\Http\\Controllers\\v1\\Android\\Oauth2Controller.php",
            "line": 23,
            "function": "redirect",
            "class": "Laravel\\Socialite\\Two\\AbstractProvider",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "redirectToGoogle",
            "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "-&gt;",
            "args": [
                "redirectToGoogle",
                []
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {},
                "redirectToGoogle"
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 692,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 77,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 694,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 669,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 635,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                },
                {
                    "methods": [
                        "GET"
                    ],
                    "config": {
                        "app.env": "documentation"
                    },
                    "queryParams": [],
                    "bodyParams": [],
                    "fileParams": [],
                    "cookies": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "name": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                },
                {
                    "name": "redirectToGoogle",
                    "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;",
            "args": [
                "responses",
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                },
                [
                    {
                        "uri": "auth\/oauth2\/google",
                        "methods": [
                            "GET",
                            "HEAD"
                        ],
                        "action": {
                            "middleware": [
                                "web"
                            ],
                            "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                            "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                            "namespace": null,
                            "prefix": null,
                            "where": []
                        },
                        "isFallback": false,
                        "controller": {},
                        "defaults": [],
                        "wheres": [],
                        "parameters": [],
                        "parameterNames": [],
                        "computedMiddleware": [
                            "web"
                        ],
                        "compiled": {}
                    },
                    {
                        "name": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                    },
                    {
                        "name": "redirectToGoogle",
                        "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                    },
                    {
                        "headers": {
                            "Content-Type": "application\/json",
                            "Accept": "application\/json"
                        },
                        "response_calls": {
                            "methods": [
                                "GET"
                            ],
                            "config": {
                                "app.env": "documentation"
                            },
                            "queryParams": [],
                            "bodyParams": [],
                            "fileParams": [],
                            "cookies": []
                        }
                    }
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;",
            "args": [
                {
                    "name": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                },
                {
                    "name": "redirectToGoogle",
                    "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller"
                },
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "Endpoints",
                        "groupDescription": "",
                        "title": "",
                        "description": "",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;",
            "args": [
                [
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {}
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": [
                {
                    "contextual": []
                },
                [
                    {},
                    "handle"
                ],
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": [
                {
                    "contextual": []
                },
                [
                    {},
                    "handle"
                ],
                [],
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;",
            "args": [
                [
                    {},
                    "handle"
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;",
            "args": [
                {},
                {}
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETauth-oauth2-google" hidden>
    <blockquote>Received response<span id="execution-response-status-GETauth-oauth2-google"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-oauth2-google"></code></pre>
</div>
<div id="execution-error-GETauth-oauth2-google" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-oauth2-google"></code></pre>
</div>
<form id="form-GETauth-oauth2-google" data-method="GET" data-path="auth/oauth2/google" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETauth-oauth2-google', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETauth-oauth2-google" onclick="tryItOut('GETauth-oauth2-google');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETauth-oauth2-google" onclick="cancelTryOut('GETauth-oauth2-google');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETauth-oauth2-google" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>auth/oauth2/google</code></b>
</p>
<p>
<label id="auth-GETauth-oauth2-google" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETauth-oauth2-google" data-component="header"></label>
</p>
</form><h1>v1 - Barang</h1>
<h3>API for Manage Barang.</h3>
<p>This API is used to manage barang.
Including barang hilang, ditemukan, didonasikan, diklaim;
depending with it's status.</p>
<h2>Delete Barang.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Will delete barang and all of its images.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang/1'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (204, delete success):</p>
</blockquote>
<pre><code class="language-json">&lt;Empty response&gt;</code></pre>
<blockquote>
<p>Example response (401, Unauthorized):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<blockquote>
<p>Example response (403, not owner or admin):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "You must be the owner or admin to do this."
}</code></pre>
<blockquote>
<p>Example response (404, barang not found):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-DELETEapi-v1-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-barang--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-barang--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-barang--id-" data-method="DELETE" data-path="api/v1/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-barang--id-" onclick="tryItOut('DELETEapi-v1-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-barang--id-" onclick="cancelTryOut('DELETEapi-v1-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/barang/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-v1-barang--id-" data-component="url" required  hidden>
<br>
The id of barang.</p>
</form>
<h2>Update Barang.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Will update barang.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama_barang":"Clair Rowe Updated Partially","tanggal":"2020-12-04","lokasi":"67934 Juvenal Place\\nJeffport, OR 75023-4991","deskripsi":"Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.","warna":"Salmon","merek":"Heaney-Hansen","user_id":5,"status_id":4,"stasiun_id":4,"kategori_id":3}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_barang": "Clair Rowe Updated Partially",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang/3'
payload = {
    "nama_barang": "Clair Rowe Updated Partially",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (201, update success):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 3,
    "nama_barang": "Clair Rowe Updated",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3,
    "created_at": null,
    "updated_at": "2020-12-10T15:25:46.000000Z"
}</code></pre>
<blockquote>
<p>Example response (400, bad request):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Validation Error",
    "errors": {
        "nama_barang": [
            "The nama barang field is required."
        ],
        "lokasi": [
            "The lokasi field is required."
        ],
        "deskripsi": [
            "The deskripsi field is required."
        ],
        "warna": [
            "The warna field is required."
        ],
        "merek": [
            "The merek field is required."
        ],
        "user_id": [
            "The user id field is required."
        ],
        "stasiun_id": [
            "The stasiun id field is required."
        ],
        "status_id": [
            "The status id field is required."
        ],
        "kategori_id": [
            "The kategori id field is required."
        ]
    }
}</code></pre>
<blockquote>
<p>Example response (401, Unauthorized):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<blockquote>
<p>Example response (403, not owner or admin):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "You must be the owner or admin to do this."
}</code></pre>
<blockquote>
<p>Example response (404, barang not found):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-PUTapi-v1-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-barang--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-barang--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-barang--id-" data-method="PUT" data-path="api/v1/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-barang--id-" onclick="tryItOut('PUTapi-v1-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-barang--id-" onclick="cancelTryOut('PUTapi-v1-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/barang/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-barang--id-" data-component="url" required  hidden>
<br>
The id of barang.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_barang</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_barang" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Nama barang.</p>
<p>
<b><code>tanggal</code></b>&nbsp;&nbsp;<small>date_format:Y-m-d</small>  &nbsp;
<input type="text" name="tanggal" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Tanggal pendataan.</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lokasi" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Lokasi detail barang.</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="deskripsi" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Deskripsi barang.</p>
<p>
<b><code>warna</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="warna" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Warna barang.</p>
<p>
<b><code>merek</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="merek" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Merek barang.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
id User yang terkait barang.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status_id" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
id Status barang.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stasiun_id" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
id Stasiun barang.</p>
<p>
<b><code>kategori_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="kategori_id" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
id Kategori barang.</p>

</form>
<h2>Partial Update Barang.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Will update barang partially.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama_barang":"Clair Rowe Updated Partially"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_barang": "Clair Rowe Updated Partially"
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang/3'
payload = {
    "nama_barang": "Clair Rowe Updated Partially"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (201, update success):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 3,
    "nama_barang": "Clair Rowe Updated Partially",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3,
    "created_at": null,
    "updated_at": "2020-12-10T15:25:46.000000Z"
}</code></pre>
<blockquote>
<p>Example response (400, bad request):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Validation Error",
    "errors": {
        "nama_barang": [
            "The nama barang must be a string."
        ],
        "lokasi": [
            "The lokasi must be a string."
        ],
        "deskripsi": [
            "The deskripsi must be a string."
        ],
        "warna": [
            "The warna must be a string."
        ],
        "merek": [
            "The merek must be a string."
        ],
        "user_id": [
            "The user id must be a number."
        ],
        "stasiun_id": [
            "The stasiun id must be a number."
        ],
        "status_id": [
            "The status id must be a number."
        ],
        "kategori_id": [
            "The kategori id must be a number."
        ]
    }
}</code></pre>
<blockquote>
<p>Example response (401, Unauthorized):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<blockquote>
<p>Example response (403, not owner or admin):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "You must be the owner or admin to do this."
}</code></pre>
<blockquote>
<p>Example response (404, barang not found):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-PATCHapi-v1-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-barang--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-barang--id-"></code></pre>
</div>
<form id="form-PATCHapi-v1-barang--id-" data-method="PATCH" data-path="api/v1/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-barang--id-" onclick="tryItOut('PATCHapi-v1-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-barang--id-" onclick="cancelTryOut('PATCHapi-v1-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/barang/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v1-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v1-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PATCHapi-v1-barang--id-" data-component="url" required  hidden>
<br>
The id of barang.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_barang</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_barang" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Nama barang.</p>
<p>
<b><code>tanggal</code></b>&nbsp;&nbsp;<small>date_format:Y-m-d</small>     <i>optional</i> &nbsp;
<input type="text" name="tanggal" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Tanggal pendataan.</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lokasi" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Lokasi detail barang.</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="deskripsi" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Deskripsi barang.</p>
<p>
<b><code>warna</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="warna" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Warna barang.</p>
<p>
<b><code>merek</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="merek" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Merek barang.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
id User yang terkait barang.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="status_id" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
id Status barang.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="stasiun_id" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
id Stasiun barang.</p>
<p>
<b><code>kategori_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="kategori_id" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
id Kategori barang.</p>

</form>
<h2>Get Detail Barang.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang/3'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200, success):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 3,
    "nama_barang": "Clair Rowe Updated Partially",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "created_at": null,
    "updated_at": "2020-12-10T15:28:18.000000Z",
    "stasiun": {
        "id": 4,
        "nama": "Lou Gutmann"
    },
    "kategori": {
        "id": 3,
        "nama": "Mr. Toby Fadel"
    }
}</code></pre>
<blockquote>
<p>Example response (401, Unauthorized):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<blockquote>
<p>Example response (404, barang not found):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Not Found"
}</code></pre>
<div id="execution-results-GETapi-v1-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang--id-"></code></pre>
</div>
<form id="form-GETapi-v1-barang--id-" data-method="GET" data-path="api/v1/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang--id-" onclick="tryItOut('GETapi-v1-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang--id-" onclick="cancelTryOut('GETapi-v1-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-barang--id-" data-component="url" required  hidden>
<br>
The id of barang.</p>
</form>
<h2>Add Barang.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Add barang with their status and its related field.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama_barang":"Clair Rowe","tanggal":"2020-12-04","lokasi":"67934 Juvenal Place\\nJeffport, OR 75023-4991","deskripsi":"Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.","warna":"Salmon","merek":"Heaney-Hansen","user_id":5,"status_id":4,"stasiun_id":4,"kategori_id":3}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_barang": "Clair Rowe",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang'
payload = {
    "nama_barang": "Clair Rowe",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (201, update success):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 3,
    "nama_barang": "Clair Rowe",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3,
    "created_at": "2020-12-10T15:25:46.000000Z",
    "updated_at": null
}</code></pre>
<blockquote>
<p>Example response (400, bad request):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Validation Error",
    "errors": {
        "nama_barang": [
            "The nama barang field is required."
        ],
        "lokasi": [
            "The lokasi field is required."
        ],
        "deskripsi": [
            "The deskripsi field is required."
        ],
        "warna": [
            "The warna field is required."
        ],
        "merek": [
            "The merek field is required."
        ],
        "user_id": [
            "The user id field is required."
        ],
        "stasiun_id": [
            "The stasiun id field is required."
        ],
        "status_id": [
            "The status id field is required."
        ],
        "kategori_id": [
            "The kategori id field is required."
        ]
    }
}</code></pre>
<blockquote>
<p>Example response (401, Unauthorized):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<div id="execution-results-POSTapi-v1-barang" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-barang"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-barang"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-barang" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-barang"></code></pre>
</div>
<form id="form-POSTapi-v1-barang" data-method="POST" data-path="api/v1/barang" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-barang', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-barang" onclick="tryItOut('POSTapi-v1-barang');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-barang" onclick="cancelTryOut('POSTapi-v1-barang');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-barang" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/barang</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-barang" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-barang" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_barang</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_barang" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Nama barang.</p>
<p>
<b><code>tanggal</code></b>&nbsp;&nbsp;<small>date_format:Y-m-d</small>  &nbsp;
<input type="text" name="tanggal" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Tanggal pendataan.</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lokasi" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Lokasi detail barang.</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="deskripsi" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Deskripsi barang.</p>
<p>
<b><code>warna</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="warna" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Warna barang.</p>
<p>
<b><code>merek</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="merek" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Merek barang.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
id User yang terkait barang.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status_id" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
id Status barang.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stasiun_id" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
id Stasiun barang.</p>
<p>
<b><code>kategori_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="kategori_id" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
id Kategori barang.</p>

</form>
<h2>Get List Barang.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<h3>Barang parameter query supported:</h3>
<ul>
<li>id</li>
<li>user_id</li>
<li>stasiun_id</li>
<li>status_id</li>
<li>kategori_id</li>
</ul>
<h3>orderBy query supported fields:</h3>
<ul>
<li>All field of barang detail</li>
</ul>
<h3>search query will search string inside theese fields:</h3>
<ul>
<li>nama_barang</li>
<li>lokasi</li>
<li>tanggl</li>
<li>deskrpi</li>
<li>warna</li>
<li>merek</li>
</ul>
<aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang?orderBy=-id&amp;search=2020" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang"
);

let params = {
    "orderBy": "-id",
    "search": "2020",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-python">import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang'
params = {
  'orderBy': '-id',
  'search': '2020',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>
<blockquote>
<p>Example response (401, Unauthorized):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Token not provided"
}</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 5,
            "nama_barang": "Jacques Dietrich DVM",
            "tanggal": "2020-12-04",
            "lokasi": "63070 Christiansen Viaduct\nMargarettachester, MT 82331-1192",
            "warna": "PapayaWhip",
            "merek": "Orn-Herman",
            "user_id": 6,
            "status_id": 4,
            "kategori_id": 2,
            "stasiun": {
                "id": 3,
                "nama": "Delia Pollich Jr."
            }
        },
        {
            "id": 4,
            "nama_barang": "Howell Herman",
            "tanggal": "2020-12-04",
            "lokasi": "86652 Kovacek Lane Suite 799\nZiemehaven, NM 82483-6929",
            "warna": "CadetBlue",
            "merek": "Beier-Green",
            "user_id": 1,
            "status_id": 1,
            "kategori_id": 2,
            "stasiun": {
                "id": 5,
                "nama": "Taurean Davis I"
            }
        },
        {
            "id": 3,
            "nama_barang": "Clair Rowe Updated Partially",
            "tanggal": "2020-12-04",
            "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
            "warna": "Salmon",
            "merek": "Heaney-Hansen",
            "user_id": 5,
            "status_id": 4,
            "kategori_id": 3,
            "stasiun": {
                "id": 4,
                "nama": "Lou Gutmann"
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/barang?orderBy=-id&amp;search=2020&amp;page=1",
        "last": "http:\/\/localhost\/api\/v1\/barang?orderBy=-id&amp;search=2020&amp;page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&amp;laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/barang?orderBy=-id&amp;search=2020&amp;page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &amp;raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/barang",
        "per_page": 20,
        "to": 3,
        "total": 3
    }
}</code></pre>
<div id="execution-results-GETapi-v1-barang" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang"></code></pre>
</div>
<form id="form-GETapi-v1-barang" data-method="GET" data-path="api/v1/barang" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang" onclick="tryItOut('GETapi-v1-barang');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang" onclick="cancelTryOut('GETapi-v1-barang');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with id.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with user_id.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="stasiun_id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with stasiun_id.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="status_id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with status_id.</p>
<p>
<b><code>kategori_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="kategori_id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with kategori_id.</p>
<p>
<b><code>orderBy</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderBy" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filtering with string search.</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="python">python</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript","python"];
        setupLanguages(languages);
    });
</script>
</body>
</html>