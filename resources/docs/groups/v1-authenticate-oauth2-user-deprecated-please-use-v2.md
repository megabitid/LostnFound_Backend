# v1 - Authenticate OAuth2 User (Deprecated, please use v2!)


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


> Example response (500):

```json
{
    "message": "cURL error 6: Could not resolve host: www.googleapis.com (see https:\/\/curl.haxx.se\/libcurl\/c\/libcurl-errors.html) for https:\/\/www.googleapis.com\/oauth2\/v4\/token"
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



