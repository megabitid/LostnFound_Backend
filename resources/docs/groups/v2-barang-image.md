# v2 - Barang Image

### API for Managing Barang Image.

This API is used to manage barang image. 
A barang can have multiple images.

## Delete Barang Image.

<small class="badge badge-darkred">requires authentication</small>

Barang image will be deleted in database and in storage.

> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6'
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
> Example response (403, not owner or admin):

```json
{
    "message": "You must be the owner or admin to do this."
}
```
> Example response (404, barang not found):

```json
{
    "message": "Not Found"
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-v2-barang-images--id-" data-component="url" required  hidden>
<br>
The id of barang image.</p>
</form>


## Update Barang Image.

<small class="badge badge-darkred">requires authentication</small>

Update all of the field except id in barang image data.

> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Tas Besar Updated","uri":"base64string","barang_id":16}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "Tas Besar Updated",
    "uri": "base64string",
    "barang_id": 16
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6'
payload = {
    "nama": "Tas Besar Updated",
    "uri": "base64string",
    "barang_id": 16
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
    "id": 6,
    "nama": "Tas Besar Updated",
    "uri": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/barangs\/image\/6",
    "barang_id": 3
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "nama": [
            "The nama field is required."
        ],
        "uri": [
            "The uri field is required."
        ],
        "barang_id": [
            "The barang id field is required."
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
> Example response (403, not owner or admin):

```json
{
    "message": "You must be the owner or admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v2-barang-images--id-" data-component="url" required  hidden>
<br>
The id of barang image.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="PUTapi-v2-barang-images--id-" data-component="body" required  hidden>
<br>
Nama image.</p>
<p>
<b><code>uri</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uri" data-endpoint="PUTapi-v2-barang-images--id-" data-component="body" required  hidden>
<br>
URI Base64 image.</p>
<p>
<b><code>barang_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="barang_id" data-endpoint="PUTapi-v2-barang-images--id-" data-component="body" required  hidden>
<br>
id Barang that owned this image. Example 3</p>

</form>


## Partial Update Barang Image.

<small class="badge badge-darkred">requires authentication</small>

Update some field of barang image data.

> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Tas Besar Partial Update","barang_id":2}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "Tas Besar Partial Update",
    "barang_id": 2
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6'
payload = {
    "nama": "Tas Besar Partial Update",
    "barang_id": 2
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers, json=payload)
response.json()
```


> Example response (201, success):

```json
{
    "id": 6,
    "nama": "Tas Besar Partial Update",
    "uri": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/barangs\/image\/6",
    "barang_id": 3
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "nama": [
            "The nama field is required."
        ],
        "uri": [
            "The uri field is required."
        ],
        "barang_id": [
            "The barang id field is required."
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
> Example response (403, not owner or admin):

```json
{
    "message": "You must be the owner or admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PATCHapi-v2-barang-images--id-" data-component="url" required  hidden>
<br>
The id of barang image.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama" data-endpoint="PATCHapi-v2-barang-images--id-" data-component="body"  hidden>
<br>
Nama image.</p>
<p>
<b><code>uri</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="uri" data-endpoint="PATCHapi-v2-barang-images--id-" data-component="body"  hidden>
<br>
URI Base64 image.</p>
<p>
<b><code>barang_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="barang_id" data-endpoint="PATCHapi-v2-barang-images--id-" data-component="body"  hidden>
<br>
id Barang that owned this image.</p>

</form>


## Get Detail Barang Image.

<small class="badge badge-darkred">requires authentication</small>

Returns barang image details.

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images/6'
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
    "id": 6,
    "nama": "Tas Besar Updated",
    "uri": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/barangs\/image\/6",
    "barang_id": 3
}
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v2-barang-images--id-" data-component="url" required  hidden>
<br>
The id of barang image.</p>
</form>


## Add Barang Image.

<small class="badge badge-darkred">requires authentication</small>

Barang image will be uploaded in firebase storage/google cloud storage.
After that, the url will be saved in database.

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/barang-images" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Tas Besar","uri":"base64string","barang_id":8}'

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

let body = {
    "nama": "Tas Besar",
    "uri": "base64string",
    "barang_id": 8
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/barang-images'
payload = {
    "nama": "Tas Besar",
    "uri": "base64string",
    "barang_id": 8
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
    "nama": "Tas Besar",
    "uri": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/barangs\/image\/6",
    "barang_id": 3,
    "id": 6
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "nama": [
            "The nama field is required."
        ],
        "uri": [
            "The uri field is required."
        ],
        "barang_id": [
            "The barang id field is required."
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTapi-v2-barang-images" data-component="body" required  hidden>
<br>
Nama image.</p>
<p>
<b><code>uri</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uri" data-endpoint="POSTapi-v2-barang-images" data-component="body" required  hidden>
<br>
URI Base64 image.</p>
<p>
<b><code>barang_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="barang_id" data-endpoint="POSTapi-v2-barang-images" data-component="body" required  hidden>
<br>
id Barang that owned this image. Example 3</p>

</form>


## Get List Barang Image

<small class="badge badge-darkred">requires authentication</small>

### Barang Image parameter query supported:
* id
* barang_id

### orderBy query supported fields:
* All field of barang image detail

<aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>

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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v2-barang-images" data-component="query"  hidden>
<br>
Apply filter with id.</p>
<p>
<b><code>barang_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="barang_id" data-endpoint="GETapi-v2-barang-images" data-component="query"  hidden>
<br>
Apply filter with barang_id.</p>
<p>
<b><code>orderBy</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderBy" data-endpoint="GETapi-v2-barang-images" data-component="query"  hidden>
<br>
Apply ordering based on specific field.
             Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).</p>
</form>



