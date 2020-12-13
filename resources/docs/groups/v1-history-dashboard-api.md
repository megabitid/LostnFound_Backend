# v1 - History ( Dashboard API )

History is the place you can get barang status histories.
Because of the value can be changed so we create this API,
to track the history of barang status. So you can get a nice chart
on your dashboard.

## Get List History

<small class="badge badge-darkred">requires authentication</small>

List of barang status histories.

### orderBy query supported fields:
* All field of claim detail

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/histories?status=quia" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/histories"
);

let params = {
    "status": "quia",
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/histories'
params = {
  'status': 'quia',
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
    "data": [],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/histories?status=quia&page=1",
        "last": "http:\/\/localhost\/api\/v1\/histories?status=quia&page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/v1\/histories?status=quia&page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/histories",
        "per_page": 20,
        "to": null,
        "total": 0
    }
}
```
<div id="execution-results-GETapi-v1-histories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-histories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-histories"></code></pre>
</div>
<div id="execution-error-GETapi-v1-histories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-histories"></code></pre>
</div>
<form id="form-GETapi-v1-histories" data-method="GET" data-path="api/v1/histories" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-histories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-histories" onclick="tryItOut('GETapi-v1-histories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-histories" onclick="cancelTryOut('GETapi-v1-histories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-histories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/histories</code></b>
</p>
<p>
<label id="auth-GETapi-v1-histories" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-histories" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-histories" data-component="query"  hidden>
<br>
The id of history.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="GETapi-v1-histories" data-component="query"  hidden>
<br>
The id of user that changed barang status.</p>
<p>
<b><code>barang_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="barang_id" data-endpoint="GETapi-v1-histories" data-component="query"  hidden>
<br>
The id of barang.</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="status" data-endpoint="GETapi-v1-histories" data-component="query"  hidden>
<br>
The status of barang. Possible values are
            hilang, ditemukan, didonasikan, diklaim.</p>
<p>
<b><code>limitDay</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="limitDay" data-endpoint="GETapi-v1-histories" data-component="query"  hidden>
<br>
Limit history to how many days.</p>
<p>
<b><code>orderBy</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderBy" data-endpoint="GETapi-v1-histories" data-component="query"  hidden>
<br>
Apply ordering based on specific field.
             Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).</p>
</form>


## Get History Count

<small class="badge badge-darkred">requires authentication</small>

Will get history count depending on status provided.
It can be last 7 day barang hilang,
last 7 day barang ditemukan, etc.

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/histories/count?status=hilang" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/histories/count"
);

let params = {
    "status": "hilang",
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/histories/count'
params = {
  'status': 'hilang',
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()
```


> Example response (200, success):

```json
{
    "2020-12-07": 0,
    "2020-12-08": 0,
    "2020-12-09": 0,
    "2020-12-10": 0,
    "2020-12-11": 0,
    "2020-12-12": 0,
    "2020-12-13": 4
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
<div id="execution-results-GETapi-v1-histories-count" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-histories-count"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-histories-count"></code></pre>
</div>
<div id="execution-error-GETapi-v1-histories-count" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-histories-count"></code></pre>
</div>
<form id="form-GETapi-v1-histories-count" data-method="GET" data-path="api/v1/histories/count" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-histories-count', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-histories-count" onclick="tryItOut('GETapi-v1-histories-count');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-histories-count" onclick="cancelTryOut('GETapi-v1-histories-count');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-histories-count" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/histories/count</code></b>
</p>
<p>
<label id="auth-GETapi-v1-histories-count" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-histories-count" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="status" data-endpoint="GETapi-v1-histories-count" data-component="query" required  hidden>
<br>
Status can be hilang, ditemukan, didonasikan, diklaim.</p>
<p>
<b><code>limitDay</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="limitDay" data-endpoint="GETapi-v1-histories-count" data-component="query"  hidden>
<br>
You can override default limit. The default limit is 7 days.</p>
</form>


## Monthly Count Percentage

<small class="badge badge-darkred">requires authentication</small>

This API count each status for this month and last month.
After that, calculate the percentage difference between them.

The formula is:

**percentage = ( (this_month - last_month)/last_month ) x 100  | where last_month != 0**

if no data in last_month then it will be considered as 0 and formula will be:

**percentage = this_month x 100**

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/histories/monthly-count" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/histories/monthly-count"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/histories/monthly-count'
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
    "this_month": {
        "ditemukan": 7,
        "hilang": 4,
        "didonasikan": 3,
        "diklaim": 1
    },
    "last_month": [],
    "percentage": {
        "ditemukan": 700,
        "hilang": 400,
        "didonasikan": 300,
        "diklaim": 100
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
<div id="execution-results-GETapi-v1-histories-monthly-count" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-histories-monthly-count"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-histories-monthly-count"></code></pre>
</div>
<div id="execution-error-GETapi-v1-histories-monthly-count" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-histories-monthly-count"></code></pre>
</div>
<form id="form-GETapi-v1-histories-monthly-count" data-method="GET" data-path="api/v1/histories/monthly-count" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-histories-monthly-count', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-histories-monthly-count" onclick="tryItOut('GETapi-v1-histories-monthly-count');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-histories-monthly-count" onclick="cancelTryOut('GETapi-v1-histories-monthly-count');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-histories-monthly-count" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/histories/monthly-count</code></b>
</p>
<p>
<label id="auth-GETapi-v1-histories-monthly-count" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-histories-monthly-count" data-component="header"></label>
</p>
</form>



