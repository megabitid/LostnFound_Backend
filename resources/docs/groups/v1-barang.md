# v1 - Barang

### API for Manage Barang.

This API is used to managing barang. 
Including barang hilang, ditemukan, didonasikan, diklaim; 
depending with its status.

## Delete Barang.

<small class="badge badge-darkred">requires authentication</small>

Will delete barang and all of its images.

> Example request:

```bash
curl -X DELETE \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/1" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/1"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang/1'
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
> Example response (404, barang not found):

```json
{
    "message": "Not Found"
}
```
<div id="execution-results-DELETEapi-v1-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-barang--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-barang--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-barang--id-" data-method="DELETE" data-path="api/v1/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-barang--id-" onclick="tryItOut('DELETEapi-v1-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-barang--id-" onclick="cancelTryOut('DELETEapi-v1-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/barang/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-v1-barang--id-" data-component="url" required  hidden>
<br>
The id of barang.</p>
</form>


## Update Barang.

<small class="badge badge-darkred">requires authentication</small>

Will update barang.

> Example request:

```bash
curl -X PUT \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama_barang":"Clair Rowe Updated Partially","lokasi":"67934 Juvenal Place\\nJeffport, OR 75023-4991","deskripsi":"Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.","warna":"Salmon","merek":"Heaney-Hansen","user_id":5,"status_id":4,"stasiun_id":4,"kategori_id":3}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_barang": "Clair Rowe Updated Partially",
    "lokasi": "67934 Juvenal Place\\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang/3'
payload = {
    "nama_barang": "Clair Rowe Updated Partially",
    "lokasi": "67934 Juvenal Place\\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


> Example response (201, update success):

```json
{
    "id": 3,
    "nama_barang": "Clair Rowe Updated",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3,
    "created_at": null,
    "updated_at": "2020-12-10T15:25:46.000000Z"
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "nama_barang": [
            "The nama barang field is required."
        ],
        "lokasi": [
            "The lokasi field is required."
        ],
        "deskripsi": [
            "The deskripsi field is required."
        ],
        "warna": [
            "The warna field is required."
        ],
        "merek": [
            "The merek field is required."
        ],
        "user_id": [
            "The user id field is required."
        ],
        "stasiun_id": [
            "The stasiun id field is required."
        ],
        "status_id": [
            "The status id field is required."
        ],
        "kategori_id": [
            "The kategori id field is required."
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
> Example response (404, barang not found):

```json
{
    "message": "Not Found"
}
```
<div id="execution-results-PUTapi-v1-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-barang--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-barang--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-barang--id-" data-method="PUT" data-path="api/v1/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-barang--id-" onclick="tryItOut('PUTapi-v1-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-barang--id-" onclick="cancelTryOut('PUTapi-v1-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/barang/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-barang--id-" data-component="url" required  hidden>
<br>
The id of barang.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_barang</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_barang" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Nama barang.</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lokasi" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Lokasi detail barang.</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="deskripsi" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Deskripsi barang.</p>
<p>
<b><code>warna</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="warna" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Warna barang.</p>
<p>
<b><code>merek</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="merek" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
Merek barang.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
id User yang terkait barang.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status_id" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
id Status barang.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stasiun_id" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
id Stasiun barang.</p>
<p>
<b><code>kategori_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="kategori_id" data-endpoint="PUTapi-v1-barang--id-" data-component="body" required  hidden>
<br>
id Kategori barang.</p>

</form>


## Partial Update Barang.

<small class="badge badge-darkred">requires authentication</small>

Will update barang partially.

> Example request:

```bash
curl -X PATCH \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama_barang":"Clair Rowe Updated Partially"}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_barang": "Clair Rowe Updated Partially"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang/3'
payload = {
    "nama_barang": "Clair Rowe Updated Partially"
}
headers = {
  'Authorization': 'Bearer {YOUR_AUTH_KEY}',
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PATCH', url, headers=headers, json=payload)
response.json()
```


> Example response (201, update success):

```json
{
    "id": 3,
    "nama_barang": "Clair Rowe Updated Partially",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3,
    "created_at": null,
    "updated_at": "2020-12-10T15:25:46.000000Z"
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "nama_barang": [
            "The nama barang must be a string."
        ],
        "lokasi": [
            "The lokasi must be a string."
        ],
        "deskripsi": [
            "The deskripsi must be a string."
        ],
        "warna": [
            "The warna must be a string."
        ],
        "merek": [
            "The merek must be a string."
        ],
        "user_id": [
            "The user id must be a number."
        ],
        "stasiun_id": [
            "The stasiun id must be a number."
        ],
        "status_id": [
            "The status id must be a number."
        ],
        "kategori_id": [
            "The kategori id must be a number."
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
> Example response (404, barang not found):

```json
{
    "message": "Not Found"
}
```
<div id="execution-results-PATCHapi-v1-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-v1-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-barang--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-v1-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-barang--id-"></code></pre>
</div>
<form id="form-PATCHapi-v1-barang--id-" data-method="PATCH" data-path="api/v1/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-v1-barang--id-" onclick="tryItOut('PATCHapi-v1-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-v1-barang--id-" onclick="cancelTryOut('PATCHapi-v1-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-v1-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/barang/{id}</code></b>
</p>
<p>
<label id="auth-PATCHapi-v1-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PATCHapi-v1-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PATCHapi-v1-barang--id-" data-component="url" required  hidden>
<br>
The id of barang.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_barang</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_barang" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Nama barang.</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lokasi" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Lokasi detail barang.</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="deskripsi" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Deskripsi barang.</p>
<p>
<b><code>warna</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="warna" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Warna barang.</p>
<p>
<b><code>merek</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="merek" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
Merek barang.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
id User yang terkait barang.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="status_id" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
id Status barang.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="stasiun_id" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
id Stasiun barang.</p>
<p>
<b><code>kategori_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="kategori_id" data-endpoint="PATCHapi-v1-barang--id-" data-component="body"  hidden>
<br>
id Kategori barang.</p>

</form>


## Get Detail Barang.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/3"
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang/3'
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
    "id": 3,
    "nama_barang": "Ms. Aaliyah Mills Sr.",
    "tanggal": "2020-12-10",
    "lokasi": "7241 Milton Loaf\nReichelport, AK 28866-0297",
    "deskripsi": "Qui dolor doloremque illo laudantium optio sit. Dolorem asperiores ex et vel deserunt minima quos. Qui veniam maiores ab vel ullam.",
    "warna": "PapayaWhip",
    "merek": "Langworth PLC",
    "user_id": 4,
    "status_id": 3,
    "stasiun_id": 2,
    "kategori_id": 5,
    "created_at": null,
    "updated_at": null,
    "stasiun": {
        "id": 2,
        "nama": "Dr. Abbigail Price"
    },
    "kategori": {
        "id": 5,
        "nama": "Mariane Eichmann"
    },
    "barangimages": [
        {
            "id": 1,
            "nama": "Teresa Hettinger",
            "uri": "https:\/\/via.placeholder.com\/640x480.png\/00cc66?text=tenetur",
            "barang_id": 3
        },
        {
            "id": 6,
            "nama": "Tas Besar",
            "uri": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/barangs\/image\/6",
            "barang_id": 3
        }
    ]
}
```
> Example response (401, Unauthorized):

```json
{
    "message": "Token not provided"
}
```
> Example response (404, barang not found):

```json
{
    "message": "Not Found"
}
```
<div id="execution-results-GETapi-v1-barang--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang--id-"></code></pre>
</div>
<form id="form-GETapi-v1-barang--id-" data-method="GET" data-path="api/v1/barang/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang--id-" onclick="tryItOut('GETapi-v1-barang--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang--id-" onclick="cancelTryOut('GETapi-v1-barang--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-barang--id-" data-component="url" required  hidden>
<br>
The id of barang.</p>
</form>


## Get List Barang (Eager Load).

<small class="badge badge-darkred">requires authentication</small>

### Barang parameter query supported:
* id
* user_id
* stasiun_id
* status_id
* kategori_id
* tanggal

### orderBy query supported fields:
* All field of barang detail

### search query will search string inside these fields:
* nama_barang
* lokasi
* deskripsi
* warna
* merek

### searchDate query will search string inside this field:
* tanggal; so you can search date date with the year only or more. Example: 2020-11


<aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang/list/eagerload?orderBy=-id&searchDate=2020" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang/list/eagerload"
);

let params = {
    "orderBy": "-id",
    "searchDate": "2020",
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang/list/eagerload'
params = {
  'orderBy': '-id',
  'searchDate': '2020',
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
> Example response (200):

```json
{
    "data": [
        {
            "id": 5,
            "nama_barang": "Jolie Stroman",
            "tanggal": "2020-12-10",
            "lokasi": "5630 Santino Lakes Suite 696\nEast Ellenport, NC 76357-2264",
            "deskripsi": "Accusantium sequi velit sit ea aut. Sed mollitia accusantium animi natus asperiores itaque tenetur. Et ut nihil aut unde sint.",
            "warna": "MediumTurquoise",
            "merek": "Klocko-Boyer",
            "user_id": 2,
            "status_id": 1,
            "stasiun_id": 5,
            "kategori_id": 3,
            "created_at": null,
            "updated_at": null,
            "stasiun": {
                "id": 5,
                "nama": "Muriel Gibson"
            },
            "kategori": {
                "id": 3,
                "nama": "Ben Bailey"
            },
            "barangimages": [
                {
                    "id": 5,
                    "nama": "Miss Queen Batz",
                    "uri": "https:\/\/via.placeholder.com\/640x480.png\/00cc22?text=non",
                    "barang_id": 5
                }
            ],
            "status": {
                "id": 1,
                "nama": "hilang"
            }
        },
        {
            "id": 4,
            "nama_barang": "Hanna Lynch PhD",
            "tanggal": "2020-12-10",
            "lokasi": "52976 Delilah Island\nLednerborough, KY 35522-5757",
            "deskripsi": "Et assumenda et qui quo saepe quia vitae voluptatum. Ut vero ea quasi porro dicta voluptatum odit. Magnam sint corporis unde sint sit. Ut cum impedit est ab eos veritatis.",
            "warna": "LightCoral",
            "merek": "Ernser, Bernhard and Deckow",
            "user_id": 5,
            "status_id": 3,
            "stasiun_id": 4,
            "kategori_id": 1,
            "created_at": null,
            "updated_at": null,
            "stasiun": {
                "id": 4,
                "nama": "Minerva Hirthe"
            },
            "kategori": {
                "id": 1,
                "nama": "Mrs. Hosea Hyatt"
            },
            "barangimages": [],
            "status": {
                "id": 3,
                "nama": "didonasikan"
            }
        },
        {
            "id": 3,
            "nama_barang": "Ms. Aaliyah Mills Sr.",
            "tanggal": "2020-12-10",
            "lokasi": "7241 Milton Loaf\nReichelport, AK 28866-0297",
            "deskripsi": "Qui dolor doloremque illo laudantium optio sit. Dolorem asperiores ex et vel deserunt minima quos. Qui veniam maiores ab vel ullam.",
            "warna": "PapayaWhip",
            "merek": "Langworth PLC",
            "user_id": 4,
            "status_id": 3,
            "stasiun_id": 2,
            "kategori_id": 5,
            "created_at": null,
            "updated_at": null,
            "stasiun": {
                "id": 2,
                "nama": "Dr. Abbigail Price"
            },
            "kategori": {
                "id": 5,
                "nama": "Mariane Eichmann"
            },
            "barangimages": [
                {
                    "id": 1,
                    "nama": "Teresa Hettinger",
                    "uri": "https:\/\/via.placeholder.com\/640x480.png\/00cc66?text=tenetur",
                    "barang_id": 3
                },
                {
                    "id": 6,
                    "nama": "Tas Besar",
                    "uri": "https:\/\/storage.googleapis.com\/megabitlostnfound.appspot.com\/barangs\/image\/6",
                    "barang_id": 3
                }
            ],
            "status": {
                "id": 3,
                "nama": "didonasikan"
            }
        },
        {
            "id": 2,
            "nama_barang": "Letha Stracke",
            "tanggal": "2020-12-10",
            "lokasi": "43960 Franecki Forest Apt. 980\nShainafurt, RI 37135",
            "deskripsi": "Nulla et id incidunt vel ut cupiditate quasi. Iure placeat corporis quam eveniet iusto harum molestias ab. Adipisci ad voluptates voluptate est in at.",
            "warna": "Snow",
            "merek": "Crooks-Schmitt",
            "user_id": 1,
            "status_id": 2,
            "stasiun_id": 2,
            "kategori_id": 4,
            "created_at": null,
            "updated_at": null,
            "stasiun": {
                "id": 2,
                "nama": "Dr. Abbigail Price"
            },
            "kategori": {
                "id": 4,
                "nama": "Lionel Hartmann I"
            },
            "barangimages": [
                {
                    "id": 3,
                    "nama": "Aylin Rosenbaum",
                    "uri": "https:\/\/via.placeholder.com\/640x480.png\/003322?text=quos",
                    "barang_id": 2
                }
            ],
            "status": {
                "id": 2,
                "nama": "ditemukan"
            }
        },
        {
            "id": 1,
            "nama_barang": "Ms. Cecelia Mayer I",
            "tanggal": "2020-12-10",
            "lokasi": "9989 Anissa Pass\nKovacekland, NE 88768-3281",
            "deskripsi": "Illo ut iusto quia minima. Voluptas eum cupiditate fuga nihil minus.",
            "warna": "MediumVioletRed",
            "merek": "Hartmann, Reinger and Jaskolski",
            "user_id": 5,
            "status_id": 2,
            "stasiun_id": 5,
            "kategori_id": 5,
            "created_at": null,
            "updated_at": "2020-12-13T07:27:42.000000Z",
            "stasiun": {
                "id": 5,
                "nama": "Muriel Gibson"
            },
            "kategori": {
                "id": 5,
                "nama": "Mariane Eichmann"
            },
            "barangimages": [
                {
                    "id": 2,
                    "nama": "Laverne Jacobs III",
                    "uri": "https:\/\/via.placeholder.com\/640x480.png\/0044ee?text=sed",
                    "barang_id": 1
                },
                {
                    "id": 4,
                    "nama": "Emmett Schmitt V",
                    "uri": "https:\/\/via.placeholder.com\/640x480.png\/00eedd?text=quis",
                    "barang_id": 1
                }
            ],
            "status": {
                "id": 2,
                "nama": "ditemukan"
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/barang\/list\/eagerload?orderBy=-id&searchDate=2020&page=1",
        "last": "http:\/\/localhost\/api\/v1\/barang\/list\/eagerload?orderBy=-id&searchDate=2020&page=1",
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
                "url": "http:\/\/localhost\/api\/v1\/barang\/list\/eagerload?orderBy=-id&searchDate=2020&page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/barang\/list\/eagerload",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}
```
<div id="execution-results-GETapi-v1-barang-list-eagerload" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang-list-eagerload"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang-list-eagerload"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang-list-eagerload" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang-list-eagerload"></code></pre>
</div>
<form id="form-GETapi-v1-barang-list-eagerload" data-method="GET" data-path="api/v1/barang/list/eagerload" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang-list-eagerload', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang-list-eagerload" onclick="tryItOut('GETapi-v1-barang-list-eagerload');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang-list-eagerload" onclick="cancelTryOut('GETapi-v1-barang-list-eagerload');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang-list-eagerload" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang/list/eagerload</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang-list-eagerload" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang-list-eagerload" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-barang-list-eagerload" data-component="query"  hidden>
<br>
Apply filter with id.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="GETapi-v1-barang-list-eagerload" data-component="query"  hidden>
<br>
Apply filter with user_id.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="stasiun_id" data-endpoint="GETapi-v1-barang-list-eagerload" data-component="query"  hidden>
<br>
Apply filter with stasiun_id.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="status_id" data-endpoint="GETapi-v1-barang-list-eagerload" data-component="query"  hidden>
<br>
Apply filter with status_id.</p>
<p>
<b><code>kategori_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="kategori_id" data-endpoint="GETapi-v1-barang-list-eagerload" data-component="query"  hidden>
<br>
Apply filter with kategori_id.</p>
<p>
<b><code>tanggal</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tanggal" data-endpoint="GETapi-v1-barang-list-eagerload" data-component="query"  hidden>
<br>
date_format:Y-m-d Apply filter with tanggal.</p>
<p>
<b><code>orderBy</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderBy" data-endpoint="GETapi-v1-barang-list-eagerload" data-component="query"  hidden>
<br>
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-v1-barang-list-eagerload" data-component="query"  hidden>
<br>
Apply filtering with string search.</p>
<p>
<b><code>searchDate</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="searchDate" data-endpoint="GETapi-v1-barang-list-eagerload" data-component="query"  hidden>
<br>
Apply filtering with date search.</p>
</form>


## Add Barang.

<small class="badge badge-darkred">requires authentication</small>

Add barang with their status and its related field.

> Example request:

```bash
curl -X POST \
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nama_barang":"Clair Rowe","lokasi":"67934 Juvenal Place\\nJeffport, OR 75023-4991","deskripsi":"Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.","warna":"Salmon","merek":"Heaney-Hansen","user_id":5,"status_id":4,"stasiun_id":4,"kategori_id":3}'

```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_barang": "Clair Rowe",
    "lokasi": "67934 Juvenal Place\\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang'
payload = {
    "nama_barang": "Clair Rowe",
    "lokasi": "67934 Juvenal Place\\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3
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
    "id": 3,
    "nama_barang": "Clair Rowe",
    "tanggal": "2020-12-04",
    "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
    "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
    "warna": "Salmon",
    "merek": "Heaney-Hansen",
    "user_id": 5,
    "status_id": 4,
    "stasiun_id": 4,
    "kategori_id": 3,
    "created_at": "2020-12-10T15:25:46.000000Z",
    "updated_at": null
}
```
> Example response (400, bad request):

```json
{
    "message": "Validation Error",
    "errors": {
        "nama_barang": [
            "The nama barang field is required."
        ],
        "lokasi": [
            "The lokasi field is required."
        ],
        "deskripsi": [
            "The deskripsi field is required."
        ],
        "warna": [
            "The warna field is required."
        ],
        "merek": [
            "The merek field is required."
        ],
        "user_id": [
            "The user id field is required."
        ],
        "stasiun_id": [
            "The stasiun id field is required."
        ],
        "status_id": [
            "The status id field is required."
        ],
        "kategori_id": [
            "The kategori id field is required."
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
<div id="execution-results-POSTapi-v1-barang" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-barang"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-barang"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-barang" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-barang"></code></pre>
</div>
<form id="form-POSTapi-v1-barang" data-method="POST" data-path="api/v1/barang" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-barang', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-barang" onclick="tryItOut('POSTapi-v1-barang');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-barang" onclick="cancelTryOut('POSTapi-v1-barang');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-barang" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/barang</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-barang" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-barang" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_barang</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_barang" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Nama barang.</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lokasi" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Lokasi detail barang.</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="deskripsi" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Deskripsi barang.</p>
<p>
<b><code>warna</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="warna" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Warna barang.</p>
<p>
<b><code>merek</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="merek" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
Merek barang.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
id User yang terkait barang.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status_id" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
id Status barang.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="stasiun_id" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
id Stasiun barang.</p>
<p>
<b><code>kategori_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="kategori_id" data-endpoint="POSTapi-v1-barang" data-component="body" required  hidden>
<br>
id Kategori barang.</p>

</form>


## Get List Barang.

<small class="badge badge-darkred">requires authentication</small>

### Barang parameter query supported:
* id
* user_id
* stasiun_id
* status_id
* kategori_id
* tanggal

### orderBy query supported fields:
* All field of barang detail

### search query will search string inside these fields:
* nama_barang
* lokasi
* deskripsi
* warna
* merek

### searchDate query will search string inside this field:
* tanggal; so you can search date date with the year only or more. Example: 2020-11


<aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>

> Example request:

```bash
curl -X GET \
    -G "https://megabit-lostnfound.herokuapp.com/api/v1/barang?orderBy=-id&searchDate=2020" \
    -H "Authorization: Bearer {YOUR_AUTH_KEY}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://megabit-lostnfound.herokuapp.com/api/v1/barang"
);

let params = {
    "orderBy": "-id",
    "searchDate": "2020",
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

url = 'https://megabit-lostnfound.herokuapp.com/api/v1/barang'
params = {
  'orderBy': '-id',
  'searchDate': '2020',
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
> Example response (200):

```json
{
    "data": [
        {
            "id": 5,
            "nama_barang": "Jolie Stroman",
            "tanggal": "2020-12-10",
            "lokasi": "5630 Santino Lakes Suite 696\nEast Ellenport, NC 76357-2264",
            "warna": "MediumTurquoise",
            "merek": "Klocko-Boyer",
            "user_id": 2,
            "status_id": 1,
            "kategori_id": 3,
            "stasiun": {
                "id": 5,
                "nama": "Muriel Gibson"
            },
            "barangimages": []
        },
        {
            "id": 4,
            "nama_barang": "Hanna Lynch PhD",
            "tanggal": "2020-12-10",
            "lokasi": "52976 Delilah Island\nLednerborough, KY 35522-5757",
            "warna": "LightCoral",
            "merek": "Ernser, Bernhard and Deckow",
            "user_id": 5,
            "status_id": 3,
            "kategori_id": 1,
            "stasiun": {
                "id": 4,
                "nama": "Minerva Hirthe"
            },
            "barangimages": []
        },
        {
            "id": 3,
            "nama_barang": "Ms. Aaliyah Mills Sr.",
            "tanggal": "2020-12-10",
            "lokasi": "7241 Milton Loaf\nReichelport, AK 28866-0297",
            "warna": "PapayaWhip",
            "merek": "Langworth PLC",
            "user_id": 4,
            "status_id": 3,
            "kategori_id": 5,
            "stasiun": {
                "id": 2,
                "nama": "Dr. Abbigail Price"
            },
            "barangimages": [
                {
                    "id": 1,
                    "nama": "Teresa Hettinger",
                    "uri": "https:\/\/via.placeholder.com\/640x480.png\/00cc66?text=tenetur",
                    "barang_id": 3
                }
            ]
        },
        {
            "id": 2,
            "nama_barang": "Letha Stracke",
            "tanggal": "2020-12-10",
            "lokasi": "43960 Franecki Forest Apt. 980\nShainafurt, RI 37135",
            "warna": "Snow",
            "merek": "Crooks-Schmitt",
            "user_id": 1,
            "status_id": 2,
            "kategori_id": 4,
            "stasiun": {
                "id": 2,
                "nama": "Dr. Abbigail Price"
            },
            "barangimages": []
        },
        {
            "id": 1,
            "nama_barang": "Ms. Cecelia Mayer I",
            "tanggal": "2020-12-10",
            "lokasi": "9989 Anissa Pass\nKovacekland, NE 88768-3281",
            "warna": "MediumVioletRed",
            "merek": "Hartmann, Reinger and Jaskolski",
            "user_id": 5,
            "status_id": 2,
            "kategori_id": 5,
            "stasiun": {
                "id": 5,
                "nama": "Muriel Gibson"
            },
            "barangimages": []
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/barang?orderBy=-id&searchDate=2020&page=1",
        "last": "http:\/\/localhost\/api\/v1\/barang?orderBy=-id&searchDate=2020&page=1",
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
                "url": "http:\/\/localhost\/api\/v1\/barang?orderBy=-id&searchDate=2020&page=1",
                "label": 1,
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/v1\/barang",
        "per_page": 20,
        "to": 5,
        "total": 5
    }
}
```
<div id="execution-results-GETapi-v1-barang" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-barang"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-barang"></code></pre>
</div>
<div id="execution-error-GETapi-v1-barang" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-barang"></code></pre>
</div>
<form id="form-GETapi-v1-barang" data-method="GET" data-path="api/v1/barang" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-barang', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-barang" onclick="tryItOut('GETapi-v1-barang');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-barang" onclick="cancelTryOut('GETapi-v1-barang');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-barang" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/barang</code></b>
</p>
<p>
<label id="auth-GETapi-v1-barang" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-barang" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with id.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with user_id.</p>
<p>
<b><code>stasiun_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="stasiun_id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with stasiun_id.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="status_id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with status_id.</p>
<p>
<b><code>kategori_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="kategori_id" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filter with kategori_id.</p>
<p>
<b><code>tanggal</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tanggal" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
date_format:Y-m-d Apply filter with tanggal.</p>
<p>
<b><code>orderBy</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderBy" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filtering with string search.</p>
<p>
<b><code>searchDate</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="searchDate" data-endpoint="GETapi-v1-barang" data-component="query"  hidden>
<br>
Apply filtering with date search.</p>
</form>



