# v1 - User Admin

### API for Managing User Admin

## Get Detail Admin User.

<small class="badge badge-darkred">requires authentication</small>

Admin User detail can be retrieved using this API.

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6'
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
    "nama": "Dr. Mathias Rohan II",
    "nip": "4539422570508851",
    "image": "https:\/\/via.placeholder.com\/640x480.png\/008800?text=doloribus",
    "role": 2,
    "stasiun_id": null,
    "created_at": null,
    "updated_at": null
}
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (403, not owner or super admin):

```json
{
    "message": "You must be owner or super admin to do this."
}
```
> Example response (404, data not found):

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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-web-users--id-" data-component="url" required  hidden>
<br>
The id of admin user.</p>
</form>


## Update Admin User.

<small class="badge badge-darkred">requires authentication</small>

Admin User can be updated using this API.

> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Tono","nip":"SA1234567","password":"UnguessablePassword","image":"uribase64","stasiun_id":"1","role":"2"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "Tono",
    "nip": "SA1234567",
    "password": "UnguessablePassword",
    "image": "uribase64",
    "stasiun_id": "1",
    "role": "2"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6'
payload = {
    "nama": "Tono",
    "nip": "SA1234567",
    "password": "UnguessablePassword",
    "image": "uribase64",
    "stasiun_id": "1",
    "role": "2"
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
 "nama": "Tono",
 "nip": "SA1234567,
 "email": null,
 "email_verified_at": null,
 "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
 "role": 2,
 "stasiun_id": 1,
 "created_at": null,
 "updated_at": "2020-12-10T17:18:49.000000Z"
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
     "nip": [
         "The nip field is required."
     ],
     "password": [
         "The password field is required."
     ],
     "image": [
         "The image field is required."
     ]
}
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (403, not owner or super admin):

```json
{
    "message": "You must be owner or super admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-web-users--id-" data-component="url" required  hidden>
<br>
The id of admin user.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="PUTapi-v1-web-users--id-" data-component="body" required  hidden>
<br>
Admin/super admin name.</p>
<p>
<b><code>nip</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nip" data-endpoint="PUTapi-v1-web-users--id-" data-component="body" required  hidden>
<br>
NIP admin/super admin.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="PUTapi-v1-web-users--id-" data-component="body" required  hidden>
<br>
Account password.</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="image" data-endpoint="PUTapi-v1-web-users--id-" data-component="body" required  hidden>
<br>
Admin/super admin profile picture in URI Base64.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="stasiun_id" data-endpoint="PUTapi-v1-web-users--id-" data-component="body"  hidden>
<br>
id stasiun where admin/super admin work.</p>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="role" data-endpoint="PUTapi-v1-web-users--id-" data-component="body"  hidden>
<br>
Role code of admin (1) and super admin (2).</p>

</form>


## Partial Update Admin User.

<small class="badge badge-darkred">requires authentication</small>

Admin User can be updated using this API.

> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Tono Partial Update"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "Tono Partial Update"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6'
payload = {
    "nama": "Tono Partial Update"
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
 "nama": "Tono Partial Update",
 "nip": "SA1234567,
 "email": null,
 "email_verified_at": null,
 "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
 "role": 2,
 "stasiun_id": 1,
 "created_at": null,
 "updated_at": "2020-12-10T17:18:49.000000Z"
}
```
> Example response (400, bad request):

```json

{
 "message": "Validation Error",
 "errors": {
     "nama": [
         "The nama must be a string."
     ],
     "nip": [
         "The nip must be a string."
     ],
     "password": [
         "The password must be a string."
     ],
     "image": [
         "The image must be a string."
     ]
}
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (403, not owner or super admin):

```json
{
    "message": "You must be owner or super admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PATCHapi-v1-web-users--id-" data-component="url" required  hidden>
<br>
The id of admin user.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama" data-endpoint="PATCHapi-v1-web-users--id-" data-component="body"  hidden>
<br>
Admin/super admin name.</p>
<p>
<b><code>nip</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nip" data-endpoint="PATCHapi-v1-web-users--id-" data-component="body"  hidden>
<br>
NIP admin/super admin.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="PATCHapi-v1-web-users--id-" data-component="body"  hidden>
<br>
Account password.</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="image" data-endpoint="PATCHapi-v1-web-users--id-" data-component="body"  hidden>
<br>
Admin/super admin profile picture in URI Base64.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="stasiun_id" data-endpoint="PATCHapi-v1-web-users--id-" data-component="body"  hidden>
<br>
id stasiun where admin/super admin work.</p>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="role" data-endpoint="PATCHapi-v1-web-users--id-" data-component="body"  hidden>
<br>
Role code of admin (1) and super admin (2).</p>

</form>


## Delete Admin User.

<small class="badge badge-darkred">requires authentication</small>

Admin User can be deleted using this API.
Only super admin can delete admin.

> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6'
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
> Example response (403, not owner or super admin):

```json
{
    "message": "You must be super admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-v1-web-users--id-" data-component="url" required  hidden>
<br>
The id of admin user.</p>
</form>


## Restore Deleted Admin User.

<small class="badge badge-darkred">requires authentication</small>

Deleted Admin User can be restored using this API.
Only super admin can restore admin.

> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6/restore" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6/restore"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/web/users/6/restore'
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers)
response.json()
```


> Example response (200, restore success):

```json
{
    "message": "User restored."
}
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (403, not owner or super admin):

```json
{
    "message": "You must be super admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PATCHapi-v1-web-users--id--restore" data-component="url" required  hidden>
<br>
The id of admin user.</p>
</form>


## Get List Admin User

<small class="badge badge-darkred">requires authentication</small>

Will returns admin list including super admin.

### orderBy query supported fields:
* All field of its detail

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/web/users?orderBy=-id" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/web/users"
);

let params = {
    "orderBy": "-id",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
params = {
  'orderBy': '-id',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()
```


> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (403, not super admin):

```json
{
    "message": "You must be super admin to do this."
}
```
> Example response (200):

```json
{
    "data": [
        {
            "id": 7,
            "nama": "Admin",
            "nip": "A12345",
            "image": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/users\/image\/7",
            "role": 1,
            "stasiun_id": 1
        },
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
        "first": "http:\/\/localhost\/api\/v1\/web\/users?orderBy=-id&page=1",
        "last": "http:\/\/localhost\/api\/v1\/web\/users?orderBy=-id&page=1",
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
                "url": "http:\/\/localhost\/api\/v1\/web\/users?orderBy=-id&page=1",
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
        "to": 2,
        "total": 2
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>orderBy</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderBy" data-endpoint="GETapi-v1-web-users" data-component="query"  hidden>
<br>
</p>
<p>
<b><code>onlyTrashed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="onlyTrashed" data-endpoint="GETapi-v1-web-users" data-component="query"  hidden>
<br>
Retrive deleted admin user if true.</p>
</form>



