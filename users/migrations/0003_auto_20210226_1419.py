# Generated by Django 3.1.7 on 2021-02-26 11:19

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('users', '0002_auto_20210226_1404'),
    ]

    operations = [
        migrations.AlterField(
            model_name='doctor',
            name='status',
            field=models.IntegerField(choices=[(1, 1), (0, 0)]),
        ),
    ]
