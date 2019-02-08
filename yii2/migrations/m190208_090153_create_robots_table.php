<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%robots}}`.
 */
class m190208_090153_create_robots_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('robots', [
            'id' => $this->primaryKey(),
            'provider_id' => $this->integer()->notNull(),
            'model' => $this->string(20)->notNull(),
            'year' => $this->date()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-robots-provider_id',
            'robots',
            'provider_id',
            'provider',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%robots}}');
    }

}
