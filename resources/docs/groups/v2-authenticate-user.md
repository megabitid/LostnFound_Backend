# v2 - Authenticate User

Authentication for mobile user.

## Login User.


User can login using this API.

_Token lifetime for user is 60*24*30 minutes (1 month)._
You can check token expiration time using exp field returned.
Visit here <a href="https://www.epochconverter.com/">https://www.epochconverter.com/</a>

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"fake@email.com","password":"UnguessablePassword"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "fake@email.com",
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/login'
payload = {
    "email": "fake@email.com",
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
    "nip": null,
    "email": "fake@email.com",
    "email_verified_at": "2020-12-10T17:18:49.000000Z",
    "image": "https:\/\/via.placeholder.com\/640x480.png\/008800?text=doloribus",
    "role": 0,
    "stasiun_id": null,
    "created_at": null,
    "updated_at": null,
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwPlwvXC9sv2NhbGhvc3Q6ODAwMFwvYXBpXC92MlwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc3MzYyNTYsImV4cCI6MTYxMDMyODI1NiwibmJmIjoxNjA3NzM2MjU2LCJqdGkiOiI5QlpjQ1lHZjlLdFdCcDhVIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0._oVDa85ail2G-A5t2NWiKt0APMkr3yl0TbbdMjZNOMg",
    "exp": 1610328256
}
```
> Example response (202, not verify email):

```json
{
    "message": "Verify your email first, we have send you an email."
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
    }
}
```
> Example response (401, login failed):

```json
{
    "message": "Authentication credentials were missing or incorrect"
}
```
<div id="execution-results-POSTapi-v2-android-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-android-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-android-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-android-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-android-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v2-android-auth-login" data-method="POST" data-path="api/v2/android/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-android-auth-login', this);">
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v2-android-auth-login" data-component="body" required  hidden>
<br>
Email user.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v2-android-auth-login" data-component="body" required  hidden>
<br>
Account password.</p>

</form>


## Register User.


User can register using this API.

_Token only last for 30 minutes in user email._

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama":"User","email":"fake@@email.com","password":"UnguessablePassword","image":"uribase64"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "User",
    "email": "fake@@email.com",
    "password": "UnguessablePassword",
    "image": "uribase64"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/register'
payload = {
    "nama": "User",
    "email": "fake@@email.com",
    "password": "UnguessablePassword",
    "image": "uribase64"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (202, success):

```json
{
    "message": "Check your email to complete registration."
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
     "password": [
         "The password field is required."
     ],
     "image": [
         "The image field is required."
     ]
}
```
> Example response (401, login failed):

```json
{
    "message": "Authentication credentials were missing or incorrect"
}
```
<div id="execution-results-POSTapi-v2-android-auth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-android-auth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-android-auth-register"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-android-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-android-auth-register"></code></pre>
</div>
<form id="form-POSTapi-v2-android-auth-register" data-method="POST" data-path="api/v2/android/auth/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-android-auth-register', this);">
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTapi-v2-android-auth-register" data-component="body" required  hidden>
<br>
Admin/super admin name.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v2-android-auth-register" data-component="body" required  hidden>
<br>
NIP admin/super admin.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v2-android-auth-register" data-component="body" required  hidden>
<br>
Account password.</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="image" data-endpoint="POSTapi-v2-android-auth-register" data-component="body" required  hidden>
<br>
Admin/super admin profile picture in URI Base64.</p>

</form>


## Logout User

<small class="badge badge-darkred">requires authentication</small>

When logout authenticated token will not work anymore.

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/logout" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/logout"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/logout'
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
<div id="execution-results-GETapi-v2-android-auth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-auth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-auth-logout"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-auth-logout"></code></pre>
</div>
<form id="form-GETapi-v2-android-auth-logout" data-method="GET" data-path="api/v2/android/auth/logout" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-auth-logout', this);">
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
<p>
<label id="auth-GETapi-v2-android-auth-logout" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-android-auth-logout" data-component="header"></label>
</p>
</form>


## Refresh token

<small class="badge badge-darkred">requires authentication</small>

Authenticated token can be refreshed to extend its lifetime before it's expired.
Recommend: 3 days before it's expired

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/refresh" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/refresh"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/refresh'
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
<div id="execution-results-GETapi-v2-android-auth-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-auth-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-auth-refresh"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-auth-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-auth-refresh"></code></pre>
</div>
<form id="form-GETapi-v2-android-auth-refresh" data-method="GET" data-path="api/v2/android/auth/refresh" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-auth-refresh', this);">
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
<p>
<label id="auth-GETapi-v2-android-auth-refresh" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v2-android-auth-refresh" data-component="header"></label>
</p>
</form>


## Verify email.


When an user get verification email and click it, the link will call this API,
and verify his email.

<aside class="notice">
The response that user see is only text though.
You can give backend custom page if you want to change it.
</aside>

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/verify/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/verify/"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/verify/'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (201, verification success):

```json
{
    "message": "Email verified successfully."
}
```
> Example response (401, verification failed):

```json
{
    "message": "The token has been blacklisted"
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
<form id="form-GETapi-v2-android-auth-verify--token-" data-method="GET" data-path="api/v2/android/auth/verify/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-auth-verify--token-', this);">
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
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETapi-v2-android-auth-verify--token-" data-component="url" required  hidden>
<br>
Verification token (jwt).</p>
</form>


## Forget password.


Sometimes user can forget his password. Use this API to allow him reset his password.

<aside class="notice">
You can give backend custom page if you want to change the reset page form.
</aside>

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":null}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": null
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password'
payload = {
    "email": null
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (200, email verification sent):

```json
{
    "message": "Check your email."
}
```
> Example response (400, bad request):

```json

{
 "message": "Validation Error",
 "errors": {
     "email": [
         "The email field is required."
     ]
}
```
<div id="execution-results-POSTapi-v2-android-auth-reset-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-android-auth-reset-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-android-auth-reset-password"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-android-auth-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-android-auth-reset-password"></code></pre>
</div>
<form id="form-POSTapi-v2-android-auth-reset-password" data-method="POST" data-path="api/v2/android/auth/reset-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-android-auth-reset-password', this);">
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v2-android-auth-reset-password" data-component="body" required  hidden>
<br>
User email.</p>

</form>


## Reset password (external).


This is what user see after user click the reset password link from his email.

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (405):

```json
{
    "message": "The GET method is not supported for this route. Supported methods: POST."
}
```
<div id="execution-results-GETapi-v2-android-auth-reset-password--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v2-android-auth-reset-password--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v2-android-auth-reset-password--token-"></code></pre>
</div>
<div id="execution-error-GETapi-v2-android-auth-reset-password--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v2-android-auth-reset-password--token-"></code></pre>
</div>
<form id="form-GETapi-v2-android-auth-reset-password--token-" data-method="GET" data-path="api/v2/android/auth/reset-password/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v2-android-auth-reset-password--token-', this);">
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
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETapi-v2-android-auth-reset-password--token-" data-component="url" required  hidden>
<br>
Verification token (jwt).</p>
</form>


## Reset password (internal).


This is used internally after user click the reset password link from his email.

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":null}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": null
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/reset-password/'
payload = {
    "password": null
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (201, verification success):

```json
{
    "message": "Password updated successfully."
}
```
> Example response (401, verification failed):

```json
{
    "message": "The token has been blacklisted"
}
```
<div id="execution-results-POSTapi-v2-android-auth-reset-password--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v2-android-auth-reset-password--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v2-android-auth-reset-password--token-"></code></pre>
</div>
<div id="execution-error-POSTapi-v2-android-auth-reset-password--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v2-android-auth-reset-password--token-"></code></pre>
</div>
<form id="form-POSTapi-v2-android-auth-reset-password--token-" data-method="POST" data-path="api/v2/android/auth/reset-password/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v2-android-auth-reset-password--token-', this);">
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
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTapi-v2-android-auth-reset-password--token-" data-component="url" required  hidden>
<br>
Verification token (jwt).</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v2-android-auth-reset-password--token-" data-component="body" required  hidden>
<br>
New password.</p>

</form>



