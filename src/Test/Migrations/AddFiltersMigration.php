<?php

declare(strict_types=1);

namespace Test\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class AddFiltersMigration extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create filters table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('
            CREATE TABLE filters (
                id INT AUTO_INCREMENT PRIMARY KEY,
                productId INT NOT NULL,
                categoryId INT NOT NULL,
                color JSON DEFAULT NULL,
                type TINYINT NOT NULL
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
        ');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE filters');
    }
}
