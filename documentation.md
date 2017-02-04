##Create a post

  Creates a new post.

**URL :**  /posts

**Method :** `POST`
  
**Parameters**

   **Required :** `title=[string]` (title of the post)
   **Required :** `description=[string]` (description of the post)
   **Required :** `latitude=[decimal]` (latitude of current location)
   **Required :** `longitude=[decimal]` (longitude of current location)
   **Optional :** `image=[file]` (image of the post)

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
  ----

##Posts

  Returns list of posts.

**URL :**  /posts

**Method :** `GET`
  
**Parameters**

   **Optional :** `page=[integer]` (current page number)
   **Optional :** `limit=[integer]` (number of posts)

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
  ----
  
  ##Nearby Posts
  
    Returns list of nearby posts.

  **URL :**  /posts/nearby

  **Method :** `GET`
    
  **Parameters**

     **Required :** `latitude=[decimal]` (latitude of current location)
     **Required :** `longitude=[decimal]` (longitude of current location)
     **Optional :** `range=[integer]` (range in km)

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
