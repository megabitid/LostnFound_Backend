# v1 - Authenticate User (Deprecated, please use v2!)


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



