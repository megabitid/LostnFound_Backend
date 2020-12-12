# v2 - Authenticate User Admin

Authenticate admin/super admin to dashboard.

## Login Admin User.


Admin/super admin user can login using this API.

_Token lifetime for admin is 60 minutes._
You can check token expiration time using exp field returned.
Visit here <a href="https://www.epochconverter.com/">https://www.epochconverter.com/</a>

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nip":"4539422570508851","password":"UnguessablePassword"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nip": "4539422570508851",
    "password": "UnguessablePassword"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/login'
payload = {
    "nip": "4539422570508851",
    "password": "UnguessablePassword"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (200, success):

```json
{
    "id": 6,
    "nama": "Dr. Mathias Rohan II",
    "nip": "4539422570508851",
    "email": null,
    "email_verified_at": null,
    "image": "https:\/\/via.placeholder.com\/640x480.png\/008800?text=doloribus",
    "role": 2,
    "stasiun_id": null,
    "created_at": null,
    "updated_at": null,
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9sb2dpbiIsImlhdCI6MTYwNzczMzU4NSwiZXhwIjoxNjA3NzM3MTg1LCJuYmYiOjE2MDc3MzM1ODUsImp0aSI6ImMzOE5PamNxQUpsQmtFd0UiLCJzdWIiOjYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.JpDgBWIhpY3O3BubirPIIhcvbk-1QJ3epw7MGpbva8E",
    "exp": 1607737185
}
```
> Example response (400, bad request):

```json

{
 "message": "Validation Error",
 "errors": {
     "nip": [
         "The nip field is required."
     ],
     "password": [
         "The password field is required."
     ]
 }
```
> Example response (401, login failed):

```json
{
    "message": "Authentication credentials were missing or incorrect"
}
```
<div id="execution-results-POSTapi-v2-web-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-web-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-web-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-web-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-web-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v2-web-auth-login" data-method="POST" data-path="api/v2/web/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-web-auth-login', this);">
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nip</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nip" data-endpoint="POSTapi-v2-web-auth-login" data-component="body" required  hidden>
<br>
NIP admin/super admin.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v2-web-auth-login" data-component="body" required  hidden>
<br>
Account password.</p>

</form>


## Register Admin User.

<small class="badge badge-darkred">requires authentication</small>

Admin/super admin user can be registered by super admin using this API.

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/register" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"Admin","nip":"A12345","password":"UnguessablePassword","image":"uribase64","stasiun_id":"1","role":"1"}'

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

let body = {
    "nama": "Admin",
    "nip": "A12345",
    "password": "UnguessablePassword",
    "image": "uribase64",
    "stasiun_id": "1",
    "role": "1"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/register'
payload = {
    "nama": "Admin",
    "nip": "A12345",
    "password": "UnguessablePassword",
    "image": "uribase64",
    "stasiun_id": "1",
    "role": "1"
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
    "nama": "Admin",
    "nip": "A12345",
    "image": "https:\/\/some-url-to-image",
    "stasiun_id": 1,
    "role": 1,
    "updated_at": "2020-12-12T00:54:24.000000Z",
    "created_at": "2020-12-12T00:54:21.000000Z",
    "id": 7,
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9yZWdpc3RlciIsImlhdCI6MTYwNzczNDQ2NCwiZXhwIjoxNjA3NzM4MDY0LCJuYmYiOjE2MDc3MzQ0NjQsImp0aSI6InBvamVxZWM2WFM5Z2lxMmwiLCJzdWIiOjcsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.wJrfZSmEEappLwT3nQHLq70y6ceAubIo8uI50amQp64",
    "exp": 1607738064
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
    "message": "You must be super admin to do this."
}
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTapi-v2-web-auth-register" data-component="body" required  hidden>
<br>
Admin/super admin name.</p>
<p>
<b><code>nip</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nip" data-endpoint="POSTapi-v2-web-auth-register" data-component="body" required  hidden>
<br>
NIP admin/super admin.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v2-web-auth-register" data-component="body" required  hidden>
<br>
Account password.</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="image" data-endpoint="POSTapi-v2-web-auth-register" data-component="body" required  hidden>
<br>
Admin/super admin profile picture in URI Base64.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="stasiun_id" data-endpoint="POSTapi-v2-web-auth-register" data-component="body"  hidden>
<br>
id stasiun where admin/super admin work.</p>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="role" data-endpoint="POSTapi-v2-web-auth-register" data-component="body"  hidden>
<br>
Role code of admin (1) and super admin (2).</p>

</form>


## Logout Admin User

<small class="badge badge-darkred">requires authentication</small>

When logout authenticated token will not work anymore.

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/logout" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/logout"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/logout'
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
 message": "successfully logout"
}
```
> Example response (401, failed):

```json
{
    "message": "The token has been blacklisted"
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
<form id="form-GETapi-v2-web-auth-logout" data-method="GET" data-path="api/v2/web/auth/logout" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-web-auth-logout', this);">
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
<p>
<label id="auth-GETapi-v2-web-auth-logout" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-web-auth-logout" data-component="header"></label>
</p>
</form>


## Refresh token

<small class="badge badge-darkred">requires authentication</small>

Authenticated token can be refreshed to extend its lifetime before it's expired.
Recommend: 15 minutes before it's expired

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/refresh" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/refresh"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/web/auth/refresh'
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
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9yZWZyZXNoIiwiaWF0IjoxNjA3NjEzMjIzLCJleHAiOjE2MDc3Mzg1NDYsIm5iZiI6MTYwNzczNDk0NiwianRpIjoicDVueGl4M3o3TG56bkVrRyIsInN1YiI6NiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.-3IOo1c1Flt-bbHPT5DMuanWn_BwMOENYemhsPSzXdM",
    "exp": 1607738546
}
```
> Example response (401, failed):

```json
{
    "message": "The token has been blacklisted"
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
<form id="form-GETapi-v2-web-auth-refresh" data-method="GET" data-path="api/v2/web/auth/refresh" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-web-auth-refresh', this);">
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
<p>
<label id="auth-GETapi-v2-web-auth-refresh" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-web-auth-refresh" data-component="header"></label>
</p>
</form>



