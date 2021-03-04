# Generated by Django 3.1.7 on 2021-03-04 17:49

from django.db import migrations, models
import django.utils.timezone


class Migration(migrations.Migration):

    dependencies = [
        ('users', '0006_patient_blood_type'),
    ]

    operations = [
        migrations.AddField(
            model_name='doctor',
            name='creation_date',
            field=models.DateTimeField(blank=True, default=django.utils.timezone.now, null=True),
        ),
    ]