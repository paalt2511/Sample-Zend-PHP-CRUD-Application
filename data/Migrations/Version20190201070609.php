<?php

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20190201070609 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `mobile_no`, `address_line_1`, `address_line_2`, `status`, `created_at`, `updated_at`) VALUES
        ('Steve', 'Green', 'steve.green@deerfoot.co.uk', '123456', 2380817151, 'Deerfoot I.T. Resources Limited Units 10/11', 'Mortimers Park, Ower,', 1, '2019-02-19 00:00:00', '2019-02-01 11:55:51');");

        $this->addSql("INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `mobile_no`, `address_line_1`, `address_line_2`, `status`, `created_at`, `updated_at`) VALUES
        ('Steve', 'Jobs', 'steve.jobs@deerfoot.co.uk', '123456', 2380817151, 'Deerfoot I.T. Resources Limited Units 10/11', 'Mortimers Park, Ower,', 1, '2019-02-19 00:00:00', '2019-02-01 11:55:51');");

        $this->addSql("INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `mobile_no`, `address_line_1`, `address_line_2`, `status`, `created_at`, `updated_at`) VALUES
        ('Steve', 'Smith', 'steve.smith@deerfoot.co.uk', '123456', 2380817151, 'Deerfoot I.T. Resources Limited Units 10/11', 'Mortimers Park, Ower,', 1, '2019-02-19 00:00:00', '2019-02-01 11:55:51');");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
