# v2 - Authenticate OAuth2 User


## Handle Callback from Google

<small class="badge badge-darkred">requires authentication</small>

_Token lifetime for user is 60*24*30 minutes (1 month)._
You can check token expiration time using exp field returned.
Visit here <a href="https://www.epochconverter.com/">https://www.epochconverter.com/</a>

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/oauth2/google/authorize?code=4%252F0AY0e-g6EBhLCybi1F4m1dCNyasrDTKVrqOQJ5T1PWefprvlq3oXh1_JqF6r2U5XT_vM7Jg" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/oauth2/google/authorize"
);

let params = {
    "code": "4%2F0AY0e-g6EBhLCybi1F4m1dCNyasrDTKVrqOQJ5T1PWefprvlq3oXh1_JqF6r2U5XT_vM7Jg",
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v2/android/auth/oauth2/google/authorize'
params = {
  'code': '4%2F0AY0e-g6EBhLCybi1F4m1dCNyasrDTKVrqOQJ5T1PWefprvlq3oXh1_JqF6r2U5XT_vM7Jg',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()
```


> Example response (200, login success):

```json

{
 "id": 6,
 "nama": "Dr. Mathias Rohan II",
 "nip": null,
 "email": someemail@gmail.com,
 "email_verified_at": "2020-12-10T17:18:49.000000Z",
 "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
 "role": 0,
 "stasiun_id": null,
 "created_at": "2020-12-10T17:18:49.000000Z",
 "updated_at": null,
 "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9sb2dpbiIsImlhdCI6MTYwNzczMzU4NSwiZXhwIjoxNjA3NzM3MTg1LCJuYmYiOjE2MDc3MzM1ODUsImp0aSI6ImMzOE5PamNxQUpsQmtFd0UiLCJzdWIiOjYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.JpDgBWIhpY3O3BubirPIIhcvbk-1QJ3epw7MGpbva8E",
 "exp": 1607737185
}
```
> Example response (201, first time login):

```json

{
 "nama": "Dr. Mathias Rohan II",
 "nip": null,
 "email": someemail@gmail.com,
 "email_verified_at": "2020-12-10T17:18:49.000000Z",
 "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
 "role": 0,
 "stasiun_id": null,
 "created_at": "2020-12-10T17:18:49.000000Z",
 "updated_at": null,
 "id": 6,
 "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvd2ViXC9hdXRoXC9sb2dpbiIsImlhdCI6MTYwNzczMzU4NSwiZXhwIjoxNjA3NzM3MTg1LCJuYmYiOjE2MDc3MzM1ODUsImp0aSI6ImMzOE5PamNxQUpsQmtFd0UiLCJzdWIiOjYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.JpDgBWIhpY3O3BubirPIIhcvbk-1QJ3epw7MGpbva8E",
 "exp": 1607737185
}
```
> Example response (400, token already used):

```json

{
 "message": "Client error: `POST https://www.googleapis.com/oauth2/v4/token` resulted in a `400 Bad Request` response:\n{\n  \"error\": \"invalid_grant\",\n  \"error_description\": \"Bad Request\"\n}\n",
}
```
> Example response (401, using code from other oauth2 account):

```json
{
    "message": "Authentication credentials are incorrect."
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="GETapi-v2-android-auth-oauth2-google-authorize" data-component="query" required  hidden>
<br>
Google auth code.</p>
</form>


## Redirect to Google.

<small class="badge badge-darkred">requires authentication</small>

User can login using google authorization.

This will redirect user to Google and signin there.
This is for web only. You must implement yourself in mobile.

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
    "message": "Session store not set on request."
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



