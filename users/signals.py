from django.db.models.signals import post_save
from django.contrib.auth.models import User
from django.dispatch import receiver
from .models import Doctor


# signal that gets fired after the user is saved
@receiver(post_save, sender=Doctor)
def create_doctor(sender, instance, created, **kwargs):
    if created:
        Doctor.objects.create(user=instance)


@receiver(post_save, sender=Doctor)
def save_doctor(sender, instance, **kwargs):
    instance.doctor.save()
