# v1 - Stasiun

### API for Managing Stasiun.

This API is used to manage stasiun. 
An user/barang can only have one stasiun.

## Delete Barang Stasiun.

<small class="badge badge-darkred">requires authentication</small>

Stasiun can be deleted using this API.

> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/10" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/10"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


> Example response (204, delete success):

```json
<Empty response>
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (403, not admin):

```json
{
    "message": "You must be admin or super admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
```
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-v1-stasiun--id-" data-component="url" required  hidden>
<br>
The id of stasiun.</p>
</form>


## Update Stasiun

<small class="badge badge-darkred">requires authentication</small>

Stasiun can be updated using this API.

> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/10" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Stasiun Maju"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/10"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "Stasiun Maju"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/10'
payload = {
    "nama": "Stasiun Maju"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


> Example response (201, success):

```json

{
 "id": 10
 "nama": "Stasiun Maju",
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "nama": [
            "The nama field is required."
        ]
    }
}
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (403, not admin):

```json
{
    "message": "You must be admin or super admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
```
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-stasiun--id-" data-component="url" required  hidden>
<br>
The id of stasiun.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="PUTapi-v1-stasiun--id-" data-component="body" required  hidden>
<br>
Nama status.</p>

</form>


## Get Detail Stasiun

<small class="badge badge-darkred">requires authentication</small>

Stasiun detail can be retrieved using this API.

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/10" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/10"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun/10'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200, success):

```json

{
 "id": 10
 "nama": "Stasiun Banjar",
}
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
```
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-stasiun--id-" data-component="url" required  hidden>
<br>
The id of stasiun.</p>
</form>


## Add Stasiun

<small class="badge badge-darkred">requires authentication</small>

Stasiun can be added using this API.

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Stasiun Banjar"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "Stasiun Banjar"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun'
payload = {
    "nama": "Stasiun Banjar"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (201, success):

```json
{
    "nama": "Stasiun Banjar",
    "id": 10
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "nama": [
            "The nama field is required."
        ]
    }
}
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (403, not admin):

```json
{
    "message": "You must be admin or super admin to do this."
}
```
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTapi-v1-stasiun" data-component="body" required  hidden>
<br>
Nama stasiun.</p>

</form>


## Get List Stasiun

<small class="badge badge-darkred">requires authentication</small>

### orderBy query supported fields:
* All field of stasiun detail

### search query will search string inside these fields:
* nama
<aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/stasiun" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/stasiun'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/stasiun?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/stasiun",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}
```
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>orderBy</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderBy" data-endpoint="GETapi-v1-stasiun" data-component="query"  hidden>
<br>
Apply ordering based on specific field.
             Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).</p>
</form>



