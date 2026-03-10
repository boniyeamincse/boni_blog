# Database Schema Design

## Tables

### `users`
- `id`: INT (PK, AI)
- `username`: VARCHAR(50) (Unique)
- `email`: VARCHAR(100) (Unique)
- `password`: VARCHAR(255)
- `role`: ENUM('admin', 'editor', 'subscriber')
- `profile_pic`: VARCHAR(255) (Nullable)
- `bio`: TEXT (Nullable)
- `created_at`: TIMESTAMP
- `updated_at`: TIMESTAMP

### `categories`
- `id`: INT (PK, AI)
- `name`: VARCHAR(50)
- `slug`: VARCHAR(60) (Unique)
- `description`: TEXT (Nullable)
- `parent_id`: INT (Self-reference, FK)
- `created_at`: TIMESTAMP

### `posts`
- `id`: INT (PK, AI)
- `author_id`: INT (FK to users.id)
- `category_id`: INT (FK to categories.id)
- `title`: VARCHAR(255)
- `slug`: VARCHAR(255) (Unique)
- `summary`: TEXT
- `content`: LONGTEXT
- `thumbnail`: VARCHAR(255)
- `status`: ENUM('draft', 'published', 'scheduled')
- `views`: INT (Default 0)
- `created_at`: TIMESTAMP
- `updated_at`: TIMESTAMP

### `comments`
- `id`: INT (PK, AI)
- `post_id`: INT (FK to posts.id)
- `user_id`: INT (FK to users.id, Nullable for guest)
- `author_name`: VARCHAR(50) (For guests)
- `author_email`: VARCHAR(100)
- `comment`: TEXT
- `parent_id`: INT (Self-reference for replies)
- `status`: ENUM('pending', 'approved', 'rejected')
- `created_at`: TIMESTAMP

### `tags`
- `id`: INT (PK, AI)
- `name`: VARCHAR(50)
- `slug`: VARCHAR(60)

### `post_tags` (Pivot Table)
- `post_id`: INT (FK to posts.id)
- `tag_id`: INT (FK to tags.id)

## Relationships
- A **User** can have many **Posts**.
- A **Category** can have many **Posts**.
- A **Post** belongs to one **Category**.
- A **Post** can have many **Comments**.
- A **Post** can have many **Tags** (Many-to-Many via `post_tags`).
