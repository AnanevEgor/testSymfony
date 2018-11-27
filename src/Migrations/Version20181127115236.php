<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181127115236 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE egor.users ADD sex VARCHAR(1) NOT NULL');
        $this->addSql('ALTER TABLE egor.users ADD email VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE egor.users ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE egor.users ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE egor.users DROP sex');
        $this->addSql('ALTER TABLE egor.users DROP email');
        $this->addSql('ALTER TABLE egor.users DROP created_at');
        $this->addSql('ALTER TABLE egor.users DROP updated_at');
    }
}
