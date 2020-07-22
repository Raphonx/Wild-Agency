<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200722224310 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE property_property_type (property_id INT NOT NULL, property_type_id INT NOT NULL, INDEX IDX_81BE04B3549213EC (property_id), INDEX IDX_81BE04B39C81C6EB (property_type_id), PRIMARY KEY(property_id, property_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE property_property_type ADD CONSTRAINT FK_81BE04B3549213EC FOREIGN KEY (property_id) REFERENCES property (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE property_property_type ADD CONSTRAINT FK_81BE04B39C81C6EB FOREIGN KEY (property_type_id) REFERENCES property_type (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE property_filter');
        $this->addSql('ALTER TABLE property_type DROP FOREIGN KEY FK_93C6E813549213EC');
        $this->addSql('DROP INDEX IDX_93C6E813549213EC ON property_type');
        $this->addSql('ALTER TABLE property_type DROP property_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE property_filter (id INT AUTO_INCREMENT NOT NULL, min_price INT DEFAULT NULL, max_price INT DEFAULT NULL, min_area INT DEFAULT NULL, max_area INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE property_property_type');
        $this->addSql('ALTER TABLE property_type ADD property_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE property_type ADD CONSTRAINT FK_93C6E813549213EC FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('CREATE INDEX IDX_93C6E813549213EC ON property_type (property_id)');
    }
}
