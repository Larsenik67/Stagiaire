<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220113123609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme CHANGE session_id session_id INT DEFAULT NULL, CHANGE module_id module_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stagiaire CHANGE telephone telephone VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme CHANGE session_id session_id INT NOT NULL, CHANGE module_id module_id INT NOT NULL');
        $this->addSql('ALTER TABLE stagiaire CHANGE telephone telephone INT NOT NULL');
    }
}
