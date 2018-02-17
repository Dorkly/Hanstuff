"""
Definition of views.
"""

from django.shortcuts import render
from django.http import HttpRequest
from django.template import RequestContext
from datetime import datetime

def home(request):
    """Renders the home page."""
    assert isinstance(request, HttpRequest)
    return render(
        request,
        'app/index.html',
        {
            'title':'Hanstuff',
            'year':datetime.now().year,
        }
    )

def contact(request):
    """Renders the contact page."""
    assert isinstance(request, HttpRequest)
    return render(
        request,
        'app/contact.html',
        {
            'title':'Contact',
            'message':'Your contact page.',
            'year':datetime.now().year,
        }
    )

def about(request):
    """Renders the about page."""
    assert isinstance(request, HttpRequest)
    return render(
        request,
        'app/about.html',
        {
            'title':'About',
            'message':'Your application description page.',
            'year':datetime.now().year,
        }
    )

def beginners(request):
    """Renders the about page."""
    assert isinstance(request, HttpRequest)
    return render(
        request,
        'app/beginners.html',
        {
            'title':'Beginners',
            'message':'Your application description page.',
            'year':datetime.now().year,
        }
    )

def intermediate(request):
    """Renders the about page."""
    assert isinstance(request, HttpRequest)
    return render(
        request,
        'app/intermediate.html',
        {
            'title':'Intermediate',
            'message':'Your application description page.',
            'year':datetime.now().year,
        }
    )

def advanced(request):
    """Renders the about page."""
    assert isinstance(request, HttpRequest)
    return render(
        request,
        'app/advanced.html',
        {
            'title':'Advanced',
            'message':'Your application description page.',
            'year':datetime.now().year,
        }
    )

def questions(request):
    """Renders the about page."""
    assert isinstance(request, HttpRequest)
    return render(
        request,
        'app/questions.html',
        {
            'title':'Q&A',
            'message':'Your application description page.',
            'year':datetime.now().year,
        }
    )