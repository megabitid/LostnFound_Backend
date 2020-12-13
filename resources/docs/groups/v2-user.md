# v2 - User 

### API for Managing User

## Get Detail User.

<small class="badge badge-darkred">requires authentication</small>

User detail can be retrieved using this API.

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/1"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users/1'
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
    "id": 1,
    "nama": "Yoshiko Gottlieb",
    "email": "katheryn42@okeefe.biz",
    "email_verified_at": "2020-12-10T17:18:48.000000Z",
    "image": "https:\/\/via.placeholder.com\/640x480.png\/00ddee?text=nostrum",
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
> Example response (403, not owner or admin):

```json
{
    "message": "You must be owner or admin to do this."
}
```
> Example response (404, data not found):

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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v2-android-users--id-" data-component="url" required  hidden>
<br>
The id of user.</p>
</form>


## Update User.

<small class="badge badge-darkred">requires authentication</small>

User can be updated using this API.

> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Yoshiko Gottlieb Updated","email":"katheryn42@okeefe.biz","image":"uribase64"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "Yoshiko Gottlieb Updated",
    "email": "katheryn42@okeefe.biz",
    "image": "uribase64"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users/1'
payload = {
    "nama": "Yoshiko Gottlieb Updated",
    "email": "katheryn42@okeefe.biz",
    "image": "uribase64"
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
    "id": 1,
    "nama": "Yoshiko Gottlieb Updated",
    "nip": "2401108140514821",
    "email": "katheryn42@okeefe.biz",
    "email_verified_at": "2020-12-10T17:18:48.000000Z",
    "image": "https:\/\/via.placeholder.com\/640x480.png\/00ddee?text=nostrum",
    "role": 0,
    "stasiun_id": null,
    "created_at": null,
    "updated_at": "2020-12-12T02:26:55.000000Z"
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
     "email": [
         "The email field is required."
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
> Example response (403, not owner or admin):

```json
{
    "message": "You must be owner or admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v2-android-users--id-" data-component="url" required  hidden>
<br>
The id of user.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="PUTapi-v2-android-users--id-" data-component="body" required  hidden>
<br>
User name.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-v2-android-users--id-" data-component="body" required  hidden>
<br>
User email.</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="image" data-endpoint="PUTapi-v2-android-users--id-" data-component="body" required  hidden>
<br>
User profile picture in URI Base64.</p>

</form>


## Partial Update User.

<small class="badge badge-darkred">requires authentication</small>

User can be updated using this API.

> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Yoshiko Gottlieb Partial Update"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users/1"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "Yoshiko Gottlieb Partial Update"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users/1'
payload = {
    "nama": "Yoshiko Gottlieb Partial Update"
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
    "id": 1,
    "nama": "Yoshiko Gottlieb Partial Update",
    "nip": null,
    "email": "katheryn42@okeefe.biz",
    "email_verified_at": "2020-12-10T17:18:48.000000Z",
    "image": "https:\/\/via.placeholder.com\/640x480.png\/00ddee?text=nostrum",
    "role": 0,
    "stasiun_id": null,
    "created_at": null,
    "updated_at": "2020-12-12T02:26:55.000000Z"
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
     "email": [
         "The email must be a string."
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
> Example response (403, not owner or admin):

```json
{
    "message": "You must be owner or admin to do this."
}
```
> Example response (404, data not found):

```json
{
    "message": "Not Found"
}
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
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PATCHapi-v2-android-users--id-" data-component="url" required  hidden>
<br>
The id of user.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama" data-endpoint="PATCHapi-v2-android-users--id-" data-component="body"  hidden>
<br>
User name.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PATCHapi-v2-android-users--id-" data-component="body"  hidden>
<br>
User email. Example:</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="image" data-endpoint="PATCHapi-v2-android-users--id-" data-component="body"  hidden>
<br>
User profile picture in URI Base64.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="PATCHapi-v2-android-users--id-" data-component="body"  hidden>
<br>
New user password.</p>

</form>


## Get List User

<small class="badge badge-darkred">requires authentication</small>

Will returns user list.

### orderBy query supported fields:
* All field of its detail

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/users?orderBy=-id" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/users"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/users'
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
            "id": 5,
            "nama": "Ms. Josie Macejkovic",
            "email": "hmonahan@bergnaum.net",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/0077aa?text=odio"
        },
        {
            "id": 4,
            "nama": "Mrs. Blanche Wisoky",
            "email": "vstanton@monahan.info",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ff33?text=et"
        },
        {
            "id": 3,
            "nama": "Trystan Bogisich",
            "email": "amalia.murray@hotmail.com",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ff11?text=quia"
        },
        {
            "id": 2,
            "nama": "Tressa Kling",
            "email": "lgrimes@hodkiewicz.com",
            "email_verified_at": "2020-12-10T17:18:49.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ffbb?text=cum"
        },
        {
            "id": 1,
            "nama": "Yoshiko Gottlieb Updated",
            "email": "katheryn42@okeefe.biz",
            "email_verified_at": "2020-12-10T17:18:48.000000Z",
            "image": "https:\/\/via.placeholder.com\/640x480.png\/00ddee?text=nostrum"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v2\/android\/users?orderBy=-id&page=1",
        "last": "http:\/\/localhost\/api\/v2\/android\/users?orderBy=-id&page=1",
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
                "url": "http:\/\/localhost\/api\/v2\/android\/users?orderBy=-id&page=1",
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>orderBy</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderBy" data-endpoint="GETapi-v2-android-users" data-component="query"  hidden>
<br>
</p>
</form>



