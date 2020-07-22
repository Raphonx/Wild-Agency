<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200722104555 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE property_message (property_id INT NOT NULL, message_id INT NOT NULL, INDEX IDX_EF707A07549213EC (property_id), INDEX IDX_EF707A07537A1329 (message_id), PRIMARY KEY(property_id, message_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE property_message ADD CONSTRAINT FK_EF707A07549213EC FOREIGN KEY (property_id) REFERENCES property (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE property_message ADD CONSTRAINT FK_EF707A07537A1329 FOREIGN KEY (message_id) REFERENCES message (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE image ADD property_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F549213EC FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F549213EC ON image (property_id)');
        $this->addSql('ALTER TABLE property_type ADD property_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE property_type ADD CONSTRAINT FK_93C6E813549213EC FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('CREATE INDEX IDX_93C6E813549213EC ON property_type (property_id)');
        $this->addSql('ALTER TABLE services ADD property_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE services ADD CONSTRAINT FK_7332E169549213EC FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('CREATE INDEX IDX_7332E169549213EC ON services (property_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE property_message');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F549213EC');
        $this->addSql('DROP INDEX IDX_C53D045F549213EC ON image');
        $this->addSql('ALTER TABLE image DROP property_id');
        $this->addSql('ALTER TABLE property_type DROP FOREIGN KEY FK_93C6E813549213EC');
        $this->addSql('DROP INDEX IDX_93C6E813549213EC ON property_type');
        $this->addSql('ALTER TABLE property_type DROP property_id');
        $this->addSql('ALTER TABLE services DROP FOREIGN KEY FK_7332E169549213EC');
        $this->addSql('DROP INDEX IDX_7332E169549213EC ON services');
        $this->addSql('ALTER TABLE services DROP property_id');
    }
}
