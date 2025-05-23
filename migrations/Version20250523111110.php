<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250523111110 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE band (id SERIAL NOT NULL, genre_id INT NOT NULL, style_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, department INT DEFAULT NULL, lineup INT NOT NULL, base_fee INT DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_48DFA2EB4296D31F ON band (genre_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_48DFA2EBBACD6074 ON band (style_id)
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN band.created_at IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN band.updated_at IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE band ADD CONSTRAINT FK_48DFA2EB4296D31F FOREIGN KEY (genre_id) REFERENCES genre (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE band ADD CONSTRAINT FK_48DFA2EBBACD6074 FOREIGN KEY (style_id) REFERENCES style (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE band DROP CONSTRAINT FK_48DFA2EB4296D31F
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE band DROP CONSTRAINT FK_48DFA2EBBACD6074
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE band
        SQL);
    }
}
