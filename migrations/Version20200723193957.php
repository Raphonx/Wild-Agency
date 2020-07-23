<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200723193957 extends AbstractMigration
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
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F3691D1CA');
        $this->addSql('DROP INDEX IDX_B6BD307F3691D1CA ON message');
        $this->addSql('ALTER TABLE message DROP properties_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE property_message');
        $this->addSql('ALTER TABLE message ADD properties_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F3691D1CA FOREIGN KEY (properties_id) REFERENCES property (id)');
        $this->addSql('CREATE INDEX IDX_B6BD307F3691D1CA ON message (properties_id)');
    }
}
