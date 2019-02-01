<?php

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20190201070601 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("
        CREATE TABLE `user` (
            `id` int(11) NOT NULL,
            `fname` varchar(100) NOT NULL,
            `lname` varchar(100) NOT NULL,
            `email` varchar(150) NOT NULL,
            `password` varchar(150) NOT NULL,
            `mobile_no` bigint(20) NOT NULL,
            `address_line_1` varchar(150) NOT NULL,
            `address_line_2` varchar(150) DEFAULT NULL,
            `status` tinyint(4) NOT NULL DEFAULT '0',
            `created_at` datetime NOT NULL,
            `updated_at` datetime NOT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
          ");
          $this->addSql("ALTER TABLE `user` ADD PRIMARY KEY (`id`);");
          $this->addSql("ALTER TABLE `user` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('user');

    }
}
