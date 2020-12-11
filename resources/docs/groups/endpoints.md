# Endpoints


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/placeat" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/placeat"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/placeat'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (404):

```json
{
    "message": "Not Found"
}
```
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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/eum" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/eum"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/eum'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```


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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/ut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/ut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/ut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()
```


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


## api/v1/web/users/{id}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/ducimus" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/ducimus"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/ducimus'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


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


## api/v1/web/users/{id}/restore

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/harum/restore" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/harum/restore"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/harum/restore'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()
```


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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 6,
            "nama": "Dr. Mathias Rohan II",
            "nip": "4539422570508851",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/008800?text=doloribus",
            "role": 2,
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/web\/users?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/web\/users",
        "per_page": 20,
        "to": 1,
        "total": 1
    }
}
```
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


## api/v1/web/auth/login

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/login" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/login'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v1/web/auth/register

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/register" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/register'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v1/web/auth/logout




> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
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


## api/v1/web/auth/refresh




> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/auth/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
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


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/consequatur" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/consequatur"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/users/consequatur'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (404):

```json
{
    "message": "Not Found"
}
```
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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/dolor" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/dolor"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/users/dolor'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```


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


## Update partially the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/aut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/users/aut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/users/aut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()
```


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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/users'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "nama": "Yoshiko Gottlieb",
            "email": "katheryn42@okeefe.biz",
            "email_verified_at": "2020-12-10T17:18:48.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ddee?text=nostrum"
        },
        {
            "id": 2,
            "nama": "Tressa Kling",
            "email": "lgrimes@hodkiewicz.com",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ffbb?text=cum"
        },
        {
            "id": 3,
            "nama": "Trystan Bogisich",
            "email": "amalia.murray@hotmail.com",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ff11?text=quia"
        },
        {
            "id": 4,
            "nama": "Mrs. Blanche Wisoky",
            "email": "vstanton@monahan.info",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ff33?text=et"
        },
        {
            "id": 5,
            "nama": "Ms. Josie Macejkovic",
            "email": "hmonahan@bergnaum.net",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0077aa?text=odio"
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/android\/users?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/android\/users",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}
```
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


## api/v1/android/auth/login

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/login" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/login'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v1/android/auth/register

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/register" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/register'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v1/android/auth/logout




> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
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


## api/v1/android/auth/refresh




> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
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


## api/v1/android/auth/oauth2/google/authorize

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/oauth2/google/authorize" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/android/auth/oauth2/google/authorize'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (400):

```json
{
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
            "type": "->",
            "args": [
                true
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 224,
            "function": "invokeWaitFn",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 269,
            "function": "waitIfPending",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 226,
            "function": "invokeWaitList",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 62,
            "function": "waitIfPending",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\Client.php",
            "line": 187,
            "function": "wait",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\ClientTrait.php",
            "line": 95,
            "function": "request",
            "class": "GuzzleHttp\\Client",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "handleGoogleCallback",
            "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 692,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 669,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                {},
                {}
            ]
        }
    ]
}
```
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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/histories" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/histories'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "data": [],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/histories?page=1",
        "last": "http:\/\/localhost\/api\/v1\/histories?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/histories?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/histories",
        "per_page": 20,
        "to": null,
        "total": 0
    }
}
```
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


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/aut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/aut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/aut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (404):

```json
{
    "message": "Not Found"
}
```
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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/aut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/aut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/aut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```


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


## api/v2/web/users/{id}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/quis" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/quis"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/quis'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/voluptatem" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/voluptatem"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/voluptatem'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()
```


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


## api/v2/web/users/{id}/restore

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/omnis/restore" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/users/omnis/restore"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users/omnis/restore'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()
```


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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/users'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 6,
            "nama": "Dr. Mathias Rohan II",
            "nip": "4539422570508851",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/008800?text=doloribus",
            "role": 2,
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/web\/users?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/web\/users",
        "per_page": 20,
        "to": 1,
        "total": 1
    }
}
```
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


## api/v2/web/auth/login

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/login" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/login'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v2/web/auth/register

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/register" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/register'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v2/web/auth/logout




> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
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


## api/v2/web/auth/refresh




> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
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


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/quibusdam" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/quibusdam"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users/quibusdam'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (404):

```json
{
    "message": "Not Found"
}
```
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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/sunt" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/sunt"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users/sunt'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```


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


## Update partially the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/error" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/error"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users/error'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()
```


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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/users" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "nama": "Yoshiko Gottlieb",
            "email": "katheryn42@okeefe.biz",
            "email_verified_at": "2020-12-10T17:18:48.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ddee?text=nostrum"
        },
        {
            "id": 2,
            "nama": "Tressa Kling",
            "email": "lgrimes@hodkiewicz.com",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ffbb?text=cum"
        },
        {
            "id": 3,
            "nama": "Trystan Bogisich",
            "email": "amalia.murray@hotmail.com",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ff11?text=quia"
        },
        {
            "id": 4,
            "nama": "Mrs. Blanche Wisoky",
            "email": "vstanton@monahan.info",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ff33?text=et"
        },
        {
            "id": 5,
            "nama": "Ms. Josie Macejkovic",
            "email": "hmonahan@bergnaum.net",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0077aa?text=odio"
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/android\/users?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/android\/users",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}
```
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


## api/v2/android/auth/login

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/login" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/login'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v2/android/auth/register

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/register" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/register'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v2/android/auth/logout




> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
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


## api/v2/android/auth/refresh




> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
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


## api/v2/android/auth/verify/{token}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/verify/voluptatem" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/verify/voluptatem"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/verify/voluptatem'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Wrong number of segments"
}
```
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


## api/v2/android/auth/reset-password

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v2/android/auth/reset-password/{token}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/accusantium" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/accusantium"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/accusantium'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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

</style>
</head>
<body>

<div>
  <div class="container">
    <h1>Reset Password</h1>
    <p>Please fill in this form to reset your password.</p>
    <hr>

    <input type="password" placeholder="New Password" name="psw" id="psw" required>

    <button onclick="resetPassword()" class="registerbtn">Reset Password</button>
  </div>
</div>

<script>
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
</script>

</body>
</html>
```
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


## api/v2/android/auth/reset-password/{token}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/aut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/aut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/aut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## api/v2/android/auth/oauth2/google/authorize

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/oauth2/google/authorize" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/oauth2/google/authorize'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (400):

```json
{
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
            "type": "->",
            "args": [
                true
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 224,
            "function": "invokeWaitFn",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 269,
            "function": "waitIfPending",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 226,
            "function": "invokeWaitList",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\promises\\src\\Promise.php",
            "line": 62,
            "function": "waitIfPending",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\Client.php",
            "line": 187,
            "function": "wait",
            "class": "GuzzleHttp\\Promise\\Promise",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\guzzlehttp\\guzzle\\src\\ClientTrait.php",
            "line": 95,
            "function": "request",
            "class": "GuzzleHttp\\Client",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "handleGoogleCallback",
            "class": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 692,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 669,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                {},
                {}
            ]
        }
    ]
}
```
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


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/velit" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/velit"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang/velit'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/ut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/ut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang/ut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```


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


## Update partially the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/eos" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/eos"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang/eos'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()
```


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


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang/tempora" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang/tempora"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang/tempora'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (404):

```json
{
    "message": "Not Found"
}
```
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


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "nama_barang": "Ms. Cecelia Mayer I",
            "tanggal": "2020-12-10",
            "lokasi": "9989 Anissa Pass\nKovacekland, NE 88768-3281",
            "warna": "MediumVioletRed",
            "merek": "Hartmann, Reinger and Jaskolski",
            "user_id": 5,
            "status_id": 1,
            "kategori_id": 5,
            "stasiun": {
                "id": 5,
                "nama": "Muriel Gibson"
            }
        },
        {
            "id": 2,
            "nama_barang": "Letha Stracke",
            "tanggal": "2020-12-10",
            "lokasi": "43960 Franecki Forest Apt. 980\nShainafurt, RI 37135",
            "warna": "Snow",
            "merek": "Crooks-Schmitt",
            "user_id": 1,
            "status_id": 2,
            "kategori_id": 4,
            "stasiun": {
                "id": 2,
                "nama": "Dr. Abbigail Price"
            }
        },
        {
            "id": 3,
            "nama_barang": "Ms. Aaliyah Mills Sr.",
            "tanggal": "2020-12-10",
            "lokasi": "7241 Milton Loaf\nReichelport, AK 28866-0297",
            "warna": "PapayaWhip",
            "merek": "Langworth PLC",
            "user_id": 4,
            "status_id": 3,
            "kategori_id": 5,
            "stasiun": {
                "id": 2,
                "nama": "Dr. Abbigail Price"
            }
        },
        {
            "id": 4,
            "nama_barang": "Hanna Lynch PhD",
            "tanggal": "2020-12-10",
            "lokasi": "52976 Delilah Island\nLednerborough, KY 35522-5757",
            "warna": "LightCoral",
            "merek": "Ernser, Bernhard and Deckow",
            "user_id": 5,
            "status_id": 3,
            "kategori_id": 1,
            "stasiun": {
                "id": 4,
                "nama": "Minerva Hirthe"
            }
        },
        {
            "id": 5,
            "nama_barang": "Jolie Stroman",
            "tanggal": "2020-12-10",
            "lokasi": "5630 Santino Lakes Suite 696\nEast Ellenport, NC 76357-2264",
            "warna": "MediumTurquoise",
            "merek": "Klocko-Boyer",
            "user_id": 2,
            "status_id": 1,
            "kategori_id": 3,
            "stasiun": {
                "id": 5,
                "nama": "Muriel Gibson"
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/barang?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/barang",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}
```
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


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/nisi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/nisi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/nisi'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/aut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/aut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/aut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```


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


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/pariatur" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/pariatur"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun/pariatur'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (404):

```json
{
    "message": "Not Found"
}
```
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


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/stasiun" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/stasiun'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "nama": "Norval Goyette IV"
        },
        {
            "id": 2,
            "nama": "Dr. Abbigail Price"
        },
        {
            "id": 3,
            "nama": "Prof. Kamren Dickens DVM"
        },
        {
            "id": 4,
            "nama": "Minerva Hirthe"
        },
        {
            "id": 5,
            "nama": "Muriel Gibson"
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/stasiun?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/stasiun",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}
```
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


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/omnis" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/omnis"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/omnis'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/quasi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/quasi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/quasi'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```


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


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/aut" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/aut"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori/aut'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (404):

```json
{
    "message": "Not Found"
}
```
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


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-kategori'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "nama": "Mrs. Hosea Hyatt"
        },
        {
            "id": 2,
            "nama": "Isaac Jacobs"
        },
        {
            "id": 3,
            "nama": "Ben Bailey"
        },
        {
            "id": 4,
            "nama": "Lionel Hartmann I"
        },
        {
            "id": 5,
            "nama": "Mariane Eichmann"
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/barang-kategori?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/barang-kategori",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}
```
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


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/error" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/error"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/error'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/assumenda" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/assumenda"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/assumenda'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```


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


## Update partially the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/earum" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/earum"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/earum'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()
```


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


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/laborum" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/laborum"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/laborum'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (404):

```json
{
    "message": "Not Found"
}
```
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


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "nama": "Teresa Hettinger",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00cc66?text=tenetur",
            "barang_id": 3
        },
        {
            "id": 2,
            "nama": "Laverne Jacobs III",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/0044ee?text=sed",
            "barang_id": 1
        },
        {
            "id": 3,
            "nama": "Aylin Rosenbaum",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/003322?text=quos",
            "barang_id": 2
        },
        {
            "id": 4,
            "nama": "Emmett Schmitt V",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00eedd?text=quis",
            "barang_id": 1
        },
        {
            "id": 5,
            "nama": "Miss Queen Batz",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00cc22?text=non",
            "barang_id": 5
        },
        {
            "id": 6,
            "nama": "Tas Besar",
            "uri": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/barangs\/image\/6",
            "barang_id": 3
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/barang-images?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/barang-images",
        "per_page": 20,
        "to": 6,
        "total": 6
    }
}
```
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


## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/asperiores" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/asperiores"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/asperiores'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


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


## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/voluptas" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/voluptas"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/voluptas'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```


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


## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/error" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/error"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status/error'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (404):

```json
{
    "message": "Not Found"
}
```
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


## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


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


## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-status" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-status'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v2\/barang-status?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v2\/barang-status",
        "per_page": 20,
        "to": 4,
        "total": 4
    }
}
```
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


## auth/oauth2/google

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/auth/oauth2/google" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/auth/oauth2/google'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (500):

```json
{
    "message": "Session store not set on request.",
    "class": "RuntimeException",
    "trace": [
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\socialite\\src\\Two\\AbstractProvider.php",
            "line": 158,
            "function": "session",
            "class": "Illuminate\\Http\\Request",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\app\\Http\\Controllers\\v1\\Android\\Oauth2Controller.php",
            "line": 23,
            "function": "redirect",
            "class": "Laravel\\Socialite\\Two\\AbstractProvider",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "redirectToGoogle",
            "class": "App\\Http\\Controllers\\v1\\Android\\Oauth2Controller",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 692,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 669,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
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
            "type": "->",
            "args": [
                {},
                {}
            ]
        }
    ]
}
```
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
</form>


## documentation/swagger

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/documentation/swagger" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/documentation/swagger"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/documentation/swagger'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json

<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="http://megabit-lostnfound.herokuapp.com/swagger/swagger-ui.css" >
    <link rel="icon" type="image/png" href="http://megabit-lostnfound.herokuapp.com/swagger/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="http://megabit-lostnfound.herokuapp.com/swagger/favicon-16x16.png" sizes="16x16" />
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
    <script src="http://megabit-lostnfound.herokuapp.com/swagger/swagger-ui-bundle.js" charset="UTF-8"> </script>
    <script src="http://megabit-lostnfound.herokuapp.com/swagger/swagger-ui-standalone-preset.js" charset="UTF-8"> </script>
    <script>
    window.onload = function() {
      // Begin Swagger UI call region
      const ui = SwaggerUIBundle({
        url: "./openapi",
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
    }
  </script>
  </body>
</html>

```
<div id="execution-results-GETdocumentation-swagger" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdocumentation-swagger"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdocumentation-swagger"></code></pre>
</div>
<div id="execution-error-GETdocumentation-swagger" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdocumentation-swagger"></code></pre>
</div>
<form id="form-GETdocumentation-swagger" data-method="GET" data-path="documentation/swagger" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdocumentation-swagger', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdocumentation-swagger" onclick="tryItOut('GETdocumentation-swagger');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdocumentation-swagger" onclick="cancelTryOut('GETdocumentation-swagger');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdocumentation-swagger" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>documentation/swagger</code></b>
</p>
<p>
<label id="auth-GETdocumentation-swagger" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETdocumentation-swagger" data-component="header"></label>
</p>
</form>


## documentation/openapi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/documentation/openapi" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/documentation/openapi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/documentation/openapi'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


<div id="execution-results-GETdocumentation-openapi" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdocumentation-openapi"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdocumentation-openapi"></code></pre>
</div>
<div id="execution-error-GETdocumentation-openapi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdocumentation-openapi"></code></pre>
</div>
<form id="form-GETdocumentation-openapi" data-method="GET" data-path="documentation/openapi" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdocumentation-openapi', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdocumentation-openapi" onclick="tryItOut('GETdocumentation-openapi');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdocumentation-openapi" onclick="cancelTryOut('GETdocumentation-openapi');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdocumentation-openapi" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>documentation/openapi</code></b>
</p>
<p>
<label id="auth-GETdocumentation-openapi" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETdocumentation-openapi" data-component="header"></label>
</p>
</form>



