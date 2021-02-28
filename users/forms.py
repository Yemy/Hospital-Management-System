from django import forms
from django.contrib.auth.models import User
from django.contrib.auth.forms import UserCreationForm
# from .models import Profile

class UserRegisterForm(UserCreationForm):
    email = forms.EmailField()
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


# class UserUpdateForm(forms.ModelForm):
#     email = forms.EmailField()

#     class Meta:
#         model = User
#         fields = ['username', 'email']

# class ProfileUpdateForm(forms.ModelForm):
#     class Meta:
#         model = Profile
#         fields = ['image']
