CREATE TABLE IF NOT EXISTS `users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `role` ENUM('admin','moderator','user') NOT NULL DEFAULT 'user',
  `is_active` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_unique` (`username`),
  UNIQUE KEY `email_unique` (`email`),
  KEY `role_idx` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `products` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(100) NOT NULL,
  `description` TEXT NOT NULL,
  `price` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  `quantity` INT NOT NULL DEFAULT 0,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`username`, `email`, `password`, `role`, `is_active`)
VALUES ('admin', 'admin@example.com', '$2y$12$p6IFdMCSfESmBbt55krgte0k62apH9x8Sn94iwamt.MNFrz.5OTyS', 'admin', 1)
ON DUPLICATE KEY UPDATE `username` = `username`;

INSERT INTO `users` (`username`, `email`, `password`, `role`, `is_active`)
VALUES ('viewer', 'viewer@example.com', '$2y$12$GFrUE2r5Fz8OgQqOc8r3ieO9lOP/I7PHx8cwbZ2AoGlIPd/YzqrTy', 'user', 1)
ON DUPLICATE KEY UPDATE `username` = `username`;