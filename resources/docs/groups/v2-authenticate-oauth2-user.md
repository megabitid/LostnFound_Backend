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
    "message": "Session store not set on request.",
    "class": "RuntimeException",
    "trace": [
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\socialite\\src\\Two\\AbstractProvider.php",
            "line": 158,
            "function": "session",
            "class": "Illuminate\\Http\\Request",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\app\\Http\\Controllers\\v2\\Android\\Oauth2Controller.php",
            "line": 34,
            "function": "redirect",
            "class": "Laravel\\Socialite\\Two\\AbstractProvider",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "redirectToGoogle",
            "class": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->",
            "args": [
                "redirectToGoogle",
                []
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 254,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {},
                "redirectToGoogle"
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 197,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 692,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 77,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 694,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 669,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 635,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 624,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->",
            "args": [
                {
                    "attributes": {},
                    "request": {},
                    "query": {},
                    "server": {},
                    "files": {},
                    "cookies": {},
                    "headers": {}
                },
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "v2 - Authenticate OAuth2 User",
                        "groupDescription": "",
                        "title": "Redirect to Google.",
                        "description": "User can login using google authorization.\n\nThis will redirect user to Google and signin there.\nThis is for web only. You must implement yourself in mobile.",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                },
                {
                    "methods": [
                        "GET"
                    ],
                    "config": {
                        "app.env": "documentation"
                    },
                    "queryParams": [],
                    "bodyParams": [],
                    "fileParams": [],
                    "cookies": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "v2 - Authenticate OAuth2 User",
                        "groupDescription": "",
                        "title": "Redirect to Google.",
                        "description": "User can login using google authorization.\n\nThis will redirect user to Google and signin there.\nThis is for web only. You must implement yourself in mobile.",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "name": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                },
                {
                    "name": "redirectToGoogle",
                    "class": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "v2 - Authenticate OAuth2 User",
                        "groupDescription": "",
                        "title": "Redirect to Google.",
                        "description": "User can login using google authorization.\n\nThis will redirect user to Google and signin there.\nThis is for web only. You must implement yourself in mobile.",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->",
            "args": [
                "responses",
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "v2 - Authenticate OAuth2 User",
                        "groupDescription": "",
                        "title": "Redirect to Google.",
                        "description": "User can login using google authorization.\n\nThis will redirect user to Google and signin there.\nThis is for web only. You must implement yourself in mobile.",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": [],
                    "responses": []
                },
                [
                    {
                        "uri": "auth\/oauth2\/google",
                        "methods": [
                            "GET",
                            "HEAD"
                        ],
                        "action": {
                            "middleware": [
                                "web"
                            ],
                            "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                            "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                            "namespace": null,
                            "prefix": null,
                            "where": []
                        },
                        "isFallback": false,
                        "controller": {},
                        "defaults": [],
                        "wheres": [],
                        "parameters": [],
                        "parameterNames": [],
                        "computedMiddleware": [
                            "web"
                        ],
                        "compiled": {}
                    },
                    {
                        "name": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                    },
                    {
                        "name": "redirectToGoogle",
                        "class": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                    },
                    {
                        "headers": {
                            "Content-Type": "application\/json",
                            "Accept": "application\/json"
                        },
                        "response_calls": {
                            "methods": [
                                "GET"
                            ],
                            "config": {
                                "app.env": "documentation"
                            },
                            "queryParams": [],
                            "bodyParams": [],
                            "fileParams": [],
                            "cookies": []
                        }
                    }
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->",
            "args": [
                {
                    "name": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                },
                {
                    "name": "redirectToGoogle",
                    "class": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller"
                },
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                },
                {
                    "id": "b01e20f5a473dbc3c22bccd59c6da22d",
                    "methods": [
                        "GET"
                    ],
                    "uri": "auth\/oauth2\/google",
                    "metadata": {
                        "groupName": "v2 - Authenticate OAuth2 User",
                        "groupDescription": "",
                        "title": "Redirect to Google.",
                        "description": "User can login using google authorization.\n\nThis will redirect user to Google and signin there.\nThis is for web only. You must implement yourself in mobile.",
                        "authenticated": true
                    },
                    "urlParameters": [],
                    "cleanUrlParameters": [],
                    "boundUri": "auth\/oauth2\/google",
                    "auth": "headers.Authorization.Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC92MVwvYW5kcm9pZFwvYXV0aFwvbG9naW4iLCJpYXQiOjE2MDc2MDY3ODcsImV4cCI6MTYxMDE5ODc4NywibmJmIjoxNjA3NjA2Nzg3LCJqdGkiOiJtME45NGtocDI0T2VGMXNDIiwic3ViIjo2LCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ej0YJMNMf3-z9apdeaOFjBN30m7jdkh7gjqn3bQLl40",
                    "headers": {
                        "Authorization": "Bearer {YOUR_AUTH_KEY}",
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "queryParameters": [],
                    "cleanQueryParameters": [],
                    "bodyParameters": [],
                    "cleanBodyParameters": [],
                    "fileParameters": []
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->",
            "args": [
                {
                    "uri": "auth\/oauth2\/google",
                    "methods": [
                        "GET",
                        "HEAD"
                    ],
                    "action": {
                        "middleware": [
                            "web"
                        ],
                        "uses": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "controller": "App\\Http\\Controllers\\v2\\Android\\Oauth2Controller@redirectToGoogle",
                        "namespace": null,
                        "prefix": null,
                        "where": []
                    },
                    "isFallback": false,
                    "controller": {},
                    "defaults": [],
                    "wheres": [],
                    "parameters": [],
                    "parameterNames": [],
                    "computedMiddleware": [
                        "web"
                    ],
                    "compiled": {}
                },
                {
                    "headers": {
                        "Content-Type": "application\/json",
                        "Accept": "application\/json"
                    },
                    "response_calls": {
                        "methods": [
                            "GET"
                        ],
                        "config": {
                            "app.env": "documentation"
                        },
                        "queryParams": [],
                        "bodyParams": [],
                        "fileParams": [],
                        "cookies": []
                    }
                }
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->",
            "args": [
                [
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {},
                    {}
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": []
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::",
            "args": [
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": [
                {
                    "contextual": []
                },
                [
                    {},
                    "handle"
                ],
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 610,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::",
            "args": [
                {
                    "contextual": []
                },
                [
                    {},
                    "handle"
                ],
                [],
                null
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->",
            "args": [
                [
                    {},
                    "handle"
                ]
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->",
            "args": [
                {},
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->",
            "args": [
                {},
                {}
            ]
        },
        {
            "file": "D:\\Megabit\\LostnFound_Backend\\lost_n_found\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->",
            "args": [
                {},
                {}
            ]
        }
    ]
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



