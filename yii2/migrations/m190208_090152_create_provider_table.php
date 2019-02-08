<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%provider}}`.
 */
class m190208_090152_create_provider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('provider', [
            'id' => $this->primaryKey(),
            'company_name' => $this->string()->notNull(),
            'description' => $this->text(200),
            'foundation_year' => $this->date()->notNull(),
            'country' => $this->string()->notNull(),
            'budget' => $this->float(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('provider');
    }
}
