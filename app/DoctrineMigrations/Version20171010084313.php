<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171010084313 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE album (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, artist VARCHAR(255) DEFAULT NULL, tracks_no INT DEFAULT NULL, year DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE album_gendre (album_id INT NOT NULL, gendre_id INT NOT NULL, INDEX IDX_936C36A41137ABCF (album_id), INDEX IDX_936C36A418068454 (gendre_id), PRIMARY KEY(album_id, gendre_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE album_person (album_id INT NOT NULL, person_id INT NOT NULL, INDEX IDX_E6A7ECC11137ABCF (album_id), INDEX IDX_E6A7ECC1217BBB47 (person_id), PRIMARY KEY(album_id, person_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gendre (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gendre_album (gendre_id INT NOT NULL, album_id INT NOT NULL, INDEX IDX_FDA44B2A18068454 (gendre_id), INDEX IDX_FDA44B2A1137ABCF (album_id), PRIMARY KEY(gendre_id, album_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person_album (person_id INT NOT NULL, album_id INT NOT NULL, INDEX IDX_95AE7187217BBB47 (person_id), INDEX IDX_95AE71871137ABCF (album_id), PRIMARY KEY(person_id, album_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE album_gendre ADD CONSTRAINT FK_936C36A41137ABCF FOREIGN KEY (album_id) REFERENCES album (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE album_gendre ADD CONSTRAINT FK_936C36A418068454 FOREIGN KEY (gendre_id) REFERENCES gendre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE album_person ADD CONSTRAINT FK_E6A7ECC11137ABCF FOREIGN KEY (album_id) REFERENCES album (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE album_person ADD CONSTRAINT FK_E6A7ECC1217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gendre_album ADD CONSTRAINT FK_FDA44B2A18068454 FOREIGN KEY (gendre_id) REFERENCES gendre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gendre_album ADD CONSTRAINT FK_FDA44B2A1137ABCF FOREIGN KEY (album_id) REFERENCES album (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person_album ADD CONSTRAINT FK_95AE7187217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE person_album ADD CONSTRAINT FK_95AE71871137ABCF FOREIGN KEY (album_id) REFERENCES album (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE album_gendre DROP FOREIGN KEY FK_936C36A41137ABCF');
        $this->addSql('ALTER TABLE album_person DROP FOREIGN KEY FK_E6A7ECC11137ABCF');
        $this->addSql('ALTER TABLE gendre_album DROP FOREIGN KEY FK_FDA44B2A1137ABCF');
        $this->addSql('ALTER TABLE person_album DROP FOREIGN KEY FK_95AE71871137ABCF');
        $this->addSql('ALTER TABLE album_gendre DROP FOREIGN KEY FK_936C36A418068454');
        $this->addSql('ALTER TABLE gendre_album DROP FOREIGN KEY FK_FDA44B2A18068454');
        $this->addSql('ALTER TABLE album_person DROP FOREIGN KEY FK_E6A7ECC1217BBB47');
        $this->addSql('ALTER TABLE person_album DROP FOREIGN KEY FK_95AE7187217BBB47');
        $this->addSql('DROP TABLE album');
        $this->addSql('DROP TABLE album_gendre');
        $this->addSql('DROP TABLE album_person');
        $this->addSql('DROP TABLE gendre');
        $this->addSql('DROP TABLE gendre_album');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE person_album');
    }
}
