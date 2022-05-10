CREATE TABLE posts_openclassroom (
    id INT NOT NULL,
    title VARCHAR(500),
    content TEXT(10000),
    creation_date DATETIME
);
-- OK

CREATE TABLE comments_openclassroom (
    id INT NOT NULL,
    post_id INT,
    author VARCHAR(255),
    comment TEXT(5000),
    comment_date DATETIME
);
-- OK