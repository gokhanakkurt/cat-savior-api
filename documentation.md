## Create New post

  Creates new post.

**URL :**  `/posts`

**Method :** `POST`
  
**Parameters**
* **Required**
   - `title=[string]` (title of the post)
   - `description=[string]` (description of the post)
   - `latitude=[decimal]` (latitude of current location)
   - `longitude=[decimal]` (longitude of current location)
   - `image=[file]` (image of the post)

**Sample URL:**
 
 http://petsavior.gokhanakkurt.com/posts
 
**Sample Response:**

```json
  {
    "status": true,
    "status_code": 200,
    "result": {
      "title": "Test Title",
      "description": "hehehehehehehehehe",
      "image": "http://petsavior.gokhanakkurt.com/uploads/posts/1486211774_2a8a5bc96c43321cbb1a7536879376f7.jpg",
      "updated_at": "2017-02-04 12:36:14",
      "created_at": "2017-02-04 12:36:14",
      "id": 1001
    }
  }
```

## List Posts

  Returns list of posts.

**URL :**  `/posts`

**Method :** `GET`
  
**Parameters**
* **Optional :** 
     - `page=[integer]` (current page number)
     - `limit=[integer]` (number of posts)

 **Sample URL:**
 
 http://petsavior.gokhanakkurt.com/posts?page=1&limit=20
 
**Sample Response:**
```json
{
  "status": true,
  "status_code": 200,
  "result": {
    "total": 1000,
    "per_page": "1",
    "current_page": 1,
    "last_page": 1000,
    "next_page_url": "http://petsavior.gokhanakkurt.com/posts?page=2",
    "prev_page_url": null,
    "from": 1,
    "to": 1,
    "data": [{
      "id": 1,
      "title": "Dolores eius occaecati nulla iusto ut dolor impedit. Ipsum ullam omnis unde velit assumenda ut omnis. Repudiandae sed deserunt animi itaque. Dolorum ullam hic minus dolore itaque suscipit.",
      "description": "Fugit reiciendis voluptas nulla fugit eum itaque. Ut et vel necessitatibus asperiores. Optio rem unde iure fugiat non incidunt explicabo.",
      "image": "http://petsavior.gokhanakkurt.com/uploads/posts/http://lorempixel.com/640/480/?50838",
      "created_at": "2017-02-04 12:22:07",
      "updated_at": "2017-02-04 12:22:07",
      "location": {
        "id": 1,
        "latitude": "-20.2306100",
        "longitude": "94.8005510",
        "name": "Sit saepe illo nisi nisi molestiae id asperiores. Deleniti perspiciatis consectetur voluptas consequatur. Doloribus quod sequi veritatis sint."
      }
    }]
  }
}
```

## Nearby Posts

  Returns list of nearby posts.

  **URL :**  `/posts/nearby`

  **Method :** `GET`
    
  **Parameters**
  * **Required :** 
    - `latitude=[decimal]` (latitude of current location)
    - `longitude=[decimal]` (longitude of current location)
  * **Optional :** 
    - `range=[integer]` (range in km)

  **Sample URL:**
 
 http://petsavior.gokhanakkurt.com/posts/nearby?latitude=-35.5722080&longitude=-16.8426710&range=100

  **Sample Response:**

```json
{
  "status": true,
  "status_code": 200,
  "result": [{
    "id": 3,
    "post_id": 3,
    "latitude": "-35.5722080",
    "longitude": "-16.8426710",
    "name": "Non animi quis temporibus. Et aut ea sit aspernatur et doloribus. Delectus ex ut dolor.",
    "created_at": "2017-02-04 12:22:07",
    "updated_at": "2017-02-04 12:22:07",
    "distance": "0.0000949",
    "title": "Tempore illum laborum rerum quas dolor quisquam. Ut perspiciatis aut sunt.",
    "description": "Cumque et earum eos sed. Quisquam voluptatem deserunt rem est quaerat ratione rem quidem.",
    "image": "http://lorempixel.com/640/480/?11022"
  }]
}
```


## Post Detail

  Returns list of nearby posts.

  **URL :**  `/posts/:id`

  **Method :** `GET`
    
  **Parameters**
  * **Required :** 
    - `id=[integer]` (id of the post)
 
  **Sample URL:**
  
  http://petsavior.gokhanakkurt.com/posts/10

  **Sample Response:**

```json
{
  "status": true,
  "status_code": 200,
  "result": {
    "id": 10,
    "title": "Sit nam sit adipisci illo. Esse aperiam quod est non mollitia. Beatae omnis distinctio architecto enim incidunt eos occaecati. Totam doloribus sed quod ad repellat inventore tenetur dolorem.",
    "description": "Aut est non ipsum quo ad. At sunt alias ducimus mollitia ipsum iusto. Animi enim non non enim rerum earum. Ipsa molestias officia optio excepturi ex accusantium quo.",
    "image": "http://petsavior.gokhanakkurt.com/uploads/posts/http://lorempixel.com/640/480/?63345",
    "created_at": "2017-02-04 12:22:07",
    "updated_at": "2017-02-04 12:22:07",
    "location": {
      "id": 10,
      "latitude": "-44.1442740",
      "longitude": "97.4106410",
      "name": "Facilis voluptatem totam architecto voluptatem maxime reprehenderit voluptas inventore. Blanditiis sit quidem dolorum enim corporis quidem. Corrupti et harum dolores sed vel."
    }
  }
}
```
