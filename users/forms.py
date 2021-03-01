from django import forms
from django.contrib.auth.models import User
from django.contrib.auth.forms import UserCreationForm
from .models import Admin, Doctor, Patient


class UserRegisterForm(UserCreationForm):
    email = forms.EmailField()

    def __init__(self, *args, **kwargs):
        super(UserRegisterForm, self).__init__(*args, **kwargs)
        for fieldname in ['username', 'password1', 'password2']:
            self.fields[fieldname].help_text = None

    # first_name = forms.CharField(max_length=50)
    # last_name = forms.CharField(max_length=50)
    # GENDER = [
    #     ('male', 'M'),
    #     ('female', 'F'),
    # ]
    # gender = forms.ChoiceField(
    #     required=False,
    #     widget=forms.RadioSelect,
    #     choices=GENDER,
    #     )

    class Meta:
        model = User
        fields = ['username', 'email', 'password1', 'password2']


class UserUpdateForm(forms.ModelForm):
    email = forms.EmailField()

    class Meta:
        model = User
        fields = ['username', 'email']

class ProfileUpdateForm(forms.ModelForm):
    class Meta:
        model = Admin
        fields = ['gender', 'address', 'phone_no', 'mobile_no', 'image']


class DoctorProfileUpdateForm(forms.ModelForm):
    class Meta:
        model = Doctor
        fields = ['specialization', 'gender', 'address', 'phone_no', 'mobile_no', 'working_hour', 'status', 'image']


class PatientProfileUpdateForm(forms.ModelForm):
    class Meta:
        model = Patient
        fields = ['gender', 'blood_type', 'age', 'address', 'mobile_no', 'image']
