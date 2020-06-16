<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200609124518 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dessinateur CHANGE id_dessinateur id_dessinateur INT AUTO_INCREMENT NOT NULL, CHANGE nom_dessinateur nom_dessinateur VARCHAR(50) DEFAULT NULL, CHANGE prenom_dessinateur prenom_dessinateur VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE genre CHANGE id_genre id_genre INT AUTO_INCREMENT NOT NULL, CHANGE lib_genre lib_genre VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE manga CHANGE id_manga id_manga INT AUTO_INCREMENT NOT NULL, CHANGE id_dessinateur id_dessinateur INT DEFAULT NULL, CHANGE id_scenariste id_scenariste INT DEFAULT NULL, CHANGE id_genre id_genre INT DEFAULT NULL, CHANGE prix prix NUMERIC(10, 2) DEFAULT NULL, CHANGE titre titre VARCHAR(100) DEFAULT NULL, CHANGE couverture couverture VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE manga RENAME INDEX id_dessinateur TO IDX_765A9E038127A5B4');
        $this->addSql('ALTER TABLE manga RENAME INDEX id_scenariste TO IDX_765A9E035BBADAC9');
        $this->addSql('ALTER TABLE manga RENAME INDEX id_genre TO IDX_765A9E036DD572C8');
        $this->addSql('ALTER TABLE scenariste CHANGE id_scenariste id_scenariste INT AUTO_INCREMENT NOT NULL, CHANGE nom_scenariste nom_scenariste VARCHAR(50) DEFAULT NULL, CHANGE prenom_scenariste prenom_scenariste VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE dessinateur CHANGE id_dessinateur id_dessinateur INT NOT NULL, CHANGE nom_dessinateur nom_dessinateur VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, CHANGE prenom_dessinateur prenom_dessinateur VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE genre CHANGE id_genre id_genre INT NOT NULL, CHANGE lib_genre lib_genre VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE manga CHANGE id_manga id_manga INT NOT NULL, CHANGE id_dessinateur id_dessinateur INT DEFAULT NULL, CHANGE id_scenariste id_scenariste INT DEFAULT NULL, CHANGE id_genre id_genre INT DEFAULT NULL, CHANGE titre titre VARCHAR(250) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, CHANGE prix prix NUMERIC(10, 2) DEFAULT \'NULL\', CHANGE couverture couverture VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE manga RENAME INDEX idx_765a9e035bbadac9 TO id_scenariste');
        $this->addSql('ALTER TABLE manga RENAME INDEX idx_765a9e036dd572c8 TO id_genre');
        $this->addSql('ALTER TABLE manga RENAME INDEX idx_765a9e038127a5b4 TO id_dessinateur');
        $this->addSql('ALTER TABLE scenariste CHANGE id_scenariste id_scenariste INT NOT NULL, CHANGE nom_scenariste nom_scenariste VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, CHANGE prenom_scenariste prenom_scenariste VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`');
    }
}
