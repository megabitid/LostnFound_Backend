# v1 - Claim

### API for Managing Claim

Claim is when user want to claim barang hilang.
Claim must be verified by admin before taking barang hilang.
After claim verified, user must show this status to take barang hilang.
Barang hilang status must be updated after claim is verified.

## Delete Claim.

<small class="badge badge-darkred">requires authentication</small>

Claim can be deleted using this API.
Ticket image also deleted in storage.

> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/4" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/4"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/4'
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
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
```
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-v1-claims--id-" data-component="url" required  hidden>
<br>
The id of barang status.</p>
</form>


## Verify Claim.

<small class="badge badge-darkred">requires authentication</small>

Claim can be verified by admin only using this api.

> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/praesentium/verified" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"verified":true}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/praesentium/verified"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "verified": true
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/praesentium/verified'
payload = {
    "verified": true
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
    "id": 4,
    "user_id": 1,
    "barang_id": 1,
    "alamat": "Jalan Mangga, Block X\/21",
    "uri_tiket": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/claims\/ticket_image\/4",
    "no_telp": "0999999999",
    "verified": 1,
    "updated_at": "2020-12-11T12:45:49.000000Z",
    "created_at": "2020-12-11T12:30:48.000000Z"
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "verified": [
            "The verified field is required."
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>verified</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-claims--id--verified" hidden><input type="radio" name="verified" value="true" data-endpoint="PUTapi-v1-claims--id--verified" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-claims--id--verified" hidden><input type="radio" name="verified" value="false" data-endpoint="PUTapi-v1-claims--id--verified" data-component="body" ><code>false</code></label>
<br>
id user that want to claim.</p>

</form>


## Update Claim.

<small class="badge badge-darkred">requires authentication</small>

Claim can be updated using this API.
Claim can be updated for barang hilang only.

> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/esse" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"1","barang_id":1,"alamat":"Jalan Mangga, Block X\/21","uri_tiket":"uribase64","no_telp":"08123456789"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/esse"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "1",
    "barang_id": 1,
    "alamat": "Jalan Mangga, Block X\/21",
    "uri_tiket": "uribase64",
    "no_telp": "08123456789"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/esse'
payload = {
    "user_id": "1",
    "barang_id": 1,
    "alamat": "Jalan Mangga, Block X\/21",
    "uri_tiket": "uribase64",
    "no_telp": "08123456789"
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
    "id": 4,
    "user_id": 1,
    "barang_id": 1,
    "alamat": "Jalan Mangga, Block X\/21",
    "uri_tiket": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/claims\/ticket_image\/4",
    "no_telp": "08123456789",
    "verified": 0,
    "updated_at": "2020-12-11T12:40:49.000000Z",
    "created_at": "2020-12-11T12:30:48.000000Z"
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "user_id": [
            "The user id field is required."
        ],
        "barang_id": [
            "The barang id field is required."
        ],
        "alamat": [
            "The alamat field is required."
        ],
        "uri_tiket": [
            "The uri tiket field is required."
        ],
        "no_telp": [
            "The no telp field is required."
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="PUTapi-v1-claims--id-" data-component="body" required  hidden>
<br>
id user that want to claim.</p>
<p>
<b><code>barang_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="barang_id" data-endpoint="PUTapi-v1-claims--id-" data-component="body" required  hidden>
<br>
id barang that user want to claim.</p>
<p>
<b><code>alamat</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="alamat" data-endpoint="PUTapi-v1-claims--id-" data-component="body" required  hidden>
<br>
Alamat of user.</p>
<p>
<b><code>uri_tiket</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uri_tiket" data-endpoint="PUTapi-v1-claims--id-" data-component="body" required  hidden>
<br>
Ticket image of user in URI Base64 format.</p>
<p>
<b><code>no_telp</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="no_telp" data-endpoint="PUTapi-v1-claims--id-" data-component="body" required  hidden>
<br>
Phone number of user.</p>

</form>


## Partial Update Claim.

<small class="badge badge-darkred">requires authentication</small>

Claim can be updated using this API.
Claim can be updated for barang hilang only.

> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/error" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"no_telp":"0999999999"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/error"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "no_telp": "0999999999"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/error'
payload = {
    "no_telp": "0999999999"
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
    "id": 4,
    "user_id": 1,
    "barang_id": 1,
    "alamat": "Jalan Mangga, Block X\/21",
    "uri_tiket": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/claims\/ticket_image\/4",
    "no_telp": "0999999999",
    "verified": 0,
    "updated_at": "2020-12-11T12:40:49.000000Z",
    "created_at": "2020-12-11T12:30:48.000000Z"
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "user_id": [
            "The user id field is required."
        ],
        "barang_id": [
            "The barang id field is required."
        ],
        "alamat": [
            "The alamat field is required."
        ],
        "uri_tiket": [
            "The uri tiket field is required."
        ],
        "no_telp": [
            "The no telp field is required."
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="user_id" data-endpoint="PATCHapi-v1-claims--id-" data-component="body"  hidden>
<br>
id user that want to claim.</p>
<p>
<b><code>barang_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="barang_id" data-endpoint="PATCHapi-v1-claims--id-" data-component="body"  hidden>
<br>
id barang that user want to claim.</p>
<p>
<b><code>alamat</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="alamat" data-endpoint="PATCHapi-v1-claims--id-" data-component="body"  hidden>
<br>
Alamat of user. Example:</p>
<p>
<b><code>uri_tiket</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="uri_tiket" data-endpoint="PATCHapi-v1-claims--id-" data-component="body"  hidden>
<br>
Ticket image of user in URI Base64 format.</p>
<p>
<b><code>no_telp</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="no_telp" data-endpoint="PATCHapi-v1-claims--id-" data-component="body"  hidden>
<br>
Phone number of user.</p>

</form>


## Detail Claim.

<small class="badge badge-darkred">requires authentication</small>

Claim detail can be retrieved using this API.

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/claims/alias" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims/alias"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims/alias'
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
    "id": 4,
    "alamat": "Jalan Mangga, Block X\/20",
    "no_telp": "08123456789",
    "uri_tiket": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/claims\/ticket_image\/4",
    "verified": 0,
    "created_at": "2020-12-11T12:30:48.000000Z",
    "updated_at": "2020-12-11T12:30:49.000000Z",
    "user_id": 1,
    "barang_id": 1,
    "barang": {
        "id": 1,
        "nama_barang": "Ms. Cecelia Mayer I"
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


## Add Claim.

<small class="badge badge-darkred">requires authentication</small>

Claim can be added using this API.
Claim can be added for barang hilang only.

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"1","barang_id":1,"alamat":"Jalan Mangga, Block X\/20","uri_tiket":"uribase64","no_telp":"08123456789"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/claims"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "1",
    "barang_id": 1,
    "alamat": "Jalan Mangga, Block X\/20",
    "uri_tiket": "uribase64",
    "no_telp": "08123456789"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims'
payload = {
    "user_id": "1",
    "barang_id": 1,
    "alamat": "Jalan Mangga, Block X\/20",
    "uri_tiket": "uribase64",
    "no_telp": "08123456789"
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
    "user_id": 1,
    "barang_id": 1,
    "alamat": "Jalan Mangga, Block X\/20",
    "uri_tiket": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/claims\/ticket_image\/4",
    "no_telp": "08123456789",
    "verified": 0,
    "updated_at": "2020-12-11T12:30:49.000000Z",
    "created_at": "2020-12-11T12:30:48.000000Z",
    "id": 4
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "user_id": [
            "The user id field is required."
        ],
        "barang_id": [
            "The barang id field is required."
        ],
        "alamat": [
            "The alamat field is required."
        ],
        "uri_tiket": [
            "The uri tiket field is required."
        ],
        "no_telp": [
            "The no telp field is required."
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-v1-claims" data-component="body" required  hidden>
<br>
id user that want to claim.</p>
<p>
<b><code>barang_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="barang_id" data-endpoint="POSTapi-v1-claims" data-component="body" required  hidden>
<br>
id barang that user want to claim.</p>
<p>
<b><code>alamat</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="alamat" data-endpoint="POSTapi-v1-claims" data-component="body" required  hidden>
<br>
Alamat of user.</p>
<p>
<b><code>uri_tiket</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uri_tiket" data-endpoint="POSTapi-v1-claims" data-component="body" required  hidden>
<br>
Ticket image of user in URI Base64 format.</p>
<p>
<b><code>no_telp</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="no_telp" data-endpoint="POSTapi-v1-claims" data-component="body" required  hidden>
<br>
Phone number of user.</p>

</form>


## Get List Claim

<small class="badge badge-darkred">requires authentication</small>

### Claim parameter query supported:
* id
* user_id
* verified
* barang_id
* no_telp

### orderBy query supported fields:
* All field of claim detail

### search query will search string inside these fields:
* alamat
* no_telp

<aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/claims" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
}).then(response => response.json());
```

```python
import requests
import json

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/claims'
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
> Example response (403, not admin):

```json
{
    "message": "You must be admin or super admin to do this."
}
```
> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "alamat": "Jalan Mangga, Block X\/20",
            "no_telp": "08123456789",
            "uri_tiket": "",
            "verified": 0,
            "created_at": "2020-12-11T12:23:34.000000Z",
            "updated_at": "2020-12-11T12:23:34.000000Z",
            "user_id": 1,
            "barang_id": 1,
            "barang": {
                "id": 1,
                "nama_barang": "Ms. Cecelia Mayer I"
            }
        },
        {
            "id": 2,
            "alamat": "Jalan Mangga, Block X\/20",
            "no_telp": "08123456789",
            "uri_tiket": "",
            "verified": 0,
            "created_at": "2020-12-11T12:26:06.000000Z",
            "updated_at": "2020-12-11T12:26:06.000000Z",
            "user_id": 1,
            "barang_id": 1,
            "barang": {
                "id": 1,
                "nama_barang": "Ms. Cecelia Mayer I"
            }
        },
        {
            "id": 3,
            "alamat": "Jalan Mangga, Block X\/20",
            "no_telp": "08123456789",
            "uri_tiket": "",
            "verified": 0,
            "created_at": "2020-12-11T12:28:17.000000Z",
            "updated_at": "2020-12-11T12:28:17.000000Z",
            "user_id": 1,
            "barang_id": 1,
            "barang": {
                "id": 1,
                "nama_barang": "Ms. Cecelia Mayer I"
            }
        },
        {
            "id": 4,
            "alamat": "Jalan Mangga, Block X\/20",
            "no_telp": "08123456789",
            "uri_tiket": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/claims\/ticket_image\/4",
            "verified": 0,
            "created_at": "2020-12-11T12:30:48.000000Z",
            "updated_at": "2020-12-11T12:30:49.000000Z",
            "user_id": 1,
            "barang_id": 1,
            "barang": {
                "id": 1,
                "nama_barang": "Ms. Cecelia Mayer I"
            }
        },
        {
            "id": 5,
            "alamat": "Jalan Mangga, Block X\/20",
            "no_telp": "08123456789",
            "uri_tiket": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/claims\/ticket_image\/5",
            "verified": 0,
            "created_at": "2020-12-11T13:18:25.000000Z",
            "updated_at": "2020-12-11T13:18:26.000000Z",
            "user_id": 1,
            "barang_id": 1,
            "barang": {
                "id": 1,
                "nama_barang": "Ms. Cecelia Mayer I"
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/claims?page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/claims",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}
```
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>orderBy</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderBy" data-endpoint="GETapi-v1-claims" data-component="query"  hidden>
<br>
Apply ordering based on specific field.
             Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).</p>
</form>



