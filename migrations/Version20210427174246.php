<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210427174246 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, view_permissions LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', visible TINYINT(1) NOT NULL, usable TINYINT(1) NOT NULL, INDEX IDX_64C19C1727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dependency (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, font_style VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, usable TINYINT(1) NOT NULL, link VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE file (id INT AUTO_INCREMENT NOT NULL, link LONGTEXT NOT NULL, extension VARCHAR(12) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE minecraft_version (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, font_style VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, usable TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE release_label (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, bg_color VARCHAR(255) NOT NULL, text_color VARCHAR(255) NOT NULL, font_style VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resource (id INT AUTO_INCREMENT NOT NULL, resource_label_id INT DEFAULT NULL, category_id INT DEFAULT NULL, user_id INT DEFAULT NULL, icon LONGTEXT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, content LONGTEXT NOT NULL, created_at DATE NOT NULL, wiki VARCHAR(255) NOT NULL, discord_invite VARCHAR(255) NOT NULL, contributors LONGTEXT NOT NULL, github_webhook VARCHAR(255) DEFAULT NULL, visible TINYINT(1) NOT NULL, INDEX IDX_BC91F4169D35E594 (resource_label_id), INDEX IDX_BC91F41612469DE2 (category_id), INDEX IDX_BC91F416A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resource_label (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, bg_color VARCHAR(255) NOT NULL, text_color VARCHAR(255) NOT NULL, font_style VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, update_id INT DEFAULT NULL, rating INT NOT NULL, content LONGTEXT NOT NULL, created_at DATE NOT NULL, INDEX IDX_794381C6A76ED395 (user_id), INDEX IDX_794381C6D596EAB1 (update_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skript_version (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, font_style VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, usable TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE support_label (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, bg_color VARCHAR(255) NOT NULL, text_color VARCHAR(255) NOT NULL, font_style VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE support_reply (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, user_id INT DEFAULT NULL, type INT NOT NULL, position INT NOT NULL, content LONGTEXT DEFAULT NULL, INDEX IDX_F12D038727ACA70 (parent_id), INDEX IDX_F12D038A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE support_status (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, text_color VARCHAR(12) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE support_ticket (id INT AUTO_INCREMENT NOT NULL, support_status_id INT DEFAULT NULL, support_label_id INT DEFAULT NULL, update_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, assigned VARCHAR(255) NOT NULL, visible TINYINT(1) NOT NULL, created_at DATE NOT NULL, INDEX IDX_1F5A4D53DD259B0B (support_status_id), INDEX IDX_1F5A4D53870FA406 (support_label_id), INDEX IDX_1F5A4D53D596EAB1 (update_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE support_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, text_color VARCHAR(255) NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `update` (id INT AUTO_INCREMENT NOT NULL, position INT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, version VARCHAR(255) NOT NULL, download_link LONGTEXT NOT NULL, created_at DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C1727ACA70 FOREIGN KEY (parent_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE resource ADD CONSTRAINT FK_BC91F4169D35E594 FOREIGN KEY (resource_label_id) REFERENCES release_label (id)');
        $this->addSql('ALTER TABLE resource ADD CONSTRAINT FK_BC91F41612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE resource ADD CONSTRAINT FK_BC91F416A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6D596EAB1 FOREIGN KEY (update_id) REFERENCES `update` (id)');
        $this->addSql('ALTER TABLE support_reply ADD CONSTRAINT FK_F12D038727ACA70 FOREIGN KEY (parent_id) REFERENCES support_ticket (id)');
        $this->addSql('ALTER TABLE support_reply ADD CONSTRAINT FK_F12D038A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE support_ticket ADD CONSTRAINT FK_1F5A4D53DD259B0B FOREIGN KEY (support_status_id) REFERENCES support_status (id)');
        $this->addSql('ALTER TABLE support_ticket ADD CONSTRAINT FK_1F5A4D53870FA406 FOREIGN KEY (support_label_id) REFERENCES support_label (id)');
        $this->addSql('ALTER TABLE support_ticket ADD CONSTRAINT FK_1F5A4D53D596EAB1 FOREIGN KEY (update_id) REFERENCES `update` (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C1727ACA70');
        $this->addSql('ALTER TABLE resource DROP FOREIGN KEY FK_BC91F41612469DE2');
        $this->addSql('ALTER TABLE resource DROP FOREIGN KEY FK_BC91F4169D35E594');
        $this->addSql('ALTER TABLE support_ticket DROP FOREIGN KEY FK_1F5A4D53870FA406');
        $this->addSql('ALTER TABLE support_ticket DROP FOREIGN KEY FK_1F5A4D53DD259B0B');
        $this->addSql('ALTER TABLE support_reply DROP FOREIGN KEY FK_F12D038727ACA70');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6D596EAB1');
        $this->addSql('ALTER TABLE support_ticket DROP FOREIGN KEY FK_1F5A4D53D596EAB1');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE dependency');
        $this->addSql('DROP TABLE file');
        $this->addSql('DROP TABLE minecraft_version');
        $this->addSql('DROP TABLE release_label');
        $this->addSql('DROP TABLE resource');
        $this->addSql('DROP TABLE resource_label');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE skript_version');
        $this->addSql('DROP TABLE support_label');
        $this->addSql('DROP TABLE support_reply');
        $this->addSql('DROP TABLE support_status');
        $this->addSql('DROP TABLE support_ticket');
        $this->addSql('DROP TABLE support_type');
        $this->addSql('DROP TABLE `update`');
    }
}
