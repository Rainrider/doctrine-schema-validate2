<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

final class Version20220212203455 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create the book table.';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('book');
        $table->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $table->addColumn('title', Types::STRING)->setLength(255);
        $table->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('book');
    }
}
