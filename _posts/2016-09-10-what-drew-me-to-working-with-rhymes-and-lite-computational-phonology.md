---
id: 7
title: What Drew Me to Working with Rhymes and Lite Computational Phonology
date: 2016-09-10T22:31:20+00:00
author: Thomas Lisankie
layout: post
guid: http://tomlisankie.com/blog/?p=7
permalink: /2016/09/10/what-drew-me-to-working-with-rhymes-and-lite-computational-phonology/
categories:
  - Uncategorized
tags:
  - early days
---
In high school, I discovered [The Black Album](https://open.spotify.com/album/4FWvo9oS4gRgHtAwDwUjiO) by Jay Z. More specifically I had been listening to [Jaydiohead](http://maxtannone.com/jaydiohead/) which I had been initially put onto (but had never really listened to in any sort of significant way) by a video from Ray William Johnson’s vlog when I was in seventh or eighth grade and then decided to listen to the pure version of The Black Album.

I loved it. Jay Z was putting together these rhyme schemes that didn’t just have flow and sound good but were also telling some sort of story/stories (also, I should note, about an environment that was essentially completely foreign to me which made it even more interesting) and also just bragging for the sake of it. I became fascinated with the fact that Jay was putting this together almost like a puzzle &#8211; creating a rhyme scheme with flow but also not sacrificing the story element.

As I continued through high school I thought “what if I could create an algorithm that would compare words to one another and then suggest rhymes based on how similar they were.” This question essentially birthed what all my personal project time has been dedicated to for the last two years or so and what has spawned my interest in computational linguistics with an integration of music theory (this is how I describe it anyway, it’s possible that this is is a field that I don’t know about. In which case, please tell me).

So, senior year I started to work on it. At first (I must have began in March of 2015) I was just picking apart songs and listing the words that rhymed, etc. so that I could try and see any patterns in the spelling of words that would allow for me to abstract in order to develop a method for comparing words. Granted, this didn’t end up working since English doesn’t exactly have a 1:1 grapheme (letter) to phoneme (sound) translation (for example, the word “one” is definitely not spelled as it sounds (w-uh-n)).

During the remainder of the school year, I sparsely worked on it but picked up working on it more over the summer. I had found a list of rules online for how one would generally go about translating specific strings of characters of sounds in many English words into their corresponding sounds. I spent a good amount of time at my local coffee shop (unfortunately just a Starbucks) translating these rules into pseudocode. Basically it would have just been a program that takes a giant list of English words and then outputs a phonemic translation of each word which I would then use as a database for the actual rhyme algorithm. Although I remember having all sorts of weird ideas about how I was actually going to store the phonemic translations such as putting it in some sort of XML tree structure which is by no means efficient as I found out later.

But then I decided to actually go online and google to see whether someone had, y’know, already done this and whether it had been done well or not so I could see if I was wasting my time trying to reinvent the wheel. And lo and behold, I came across [The CMU Pronouncing Dictionary](http://www.speech.cs.cmu.edu/cgi-bin/cmudict) which had every word in the English language (many of which are completely useless and would never come up in any but the most obscure scenarios, but that’s another story) along with that word’s phonemic translation in [ARPAbet](https://en.wikipedia.org/wiki/Arpabet). This is exactly what I had been trying to do but even more efficiently so! This presented a bittersweet feeling for me though. Sweet because I no longer had to spend time trying to write a program that would produce this exact same result and could instead move on to the fun part of actually creating the rhyme algorithm. Bitter because I had just spent three weeks (obviously not every waking hour or anything, but definitely working on it here and there) wasting my time to try and create a database that already existed for free.

This taught me an important lesson though: whenever you’re working on a project and you identify a piece of information, see if it’s already been done so that you don’t end up wasting your time. And the thing is, I did know this in the back of my head. But I had been preventing myself from looking up this information because I didn’t want to bruise my own ego and feel as if I had been completely wasting my time and add to my fear of “I’ll never be able to create anything new because someone will always have gotten to it before me.” But that’s so counter-productive because why wouldn’t I want to know if I had been wasting my time? Why wouldn’t I want to move forward with my life and move on to better, more interesting things if I could? Knowing something is always better than not knowing something (there is rarely an exception to this when it comes to personal relationships, but that usually has more to do with obsessing over a piece of information about that person rather than simply just knowing it). And if that knowledge makes you sad, it can typically be remedied through applying a different attitude to the situation, focusing on something else, or doing something to change it.

Anyway, once I had this database I was free to actually develop the core of this whole endeavor which was (and to some extent still is) an algorithm for comparing the pronunciations of two words and then outputting a percentage of how similar their pronunciation is (aka how well they rhyme). I’m not actually gonna describe the algorithm in this post (I completed the first working version of it in November 2015 and have been tweaking it on and off ever since), but I will in a future post once I have the app on the iOS App Store (after all, after I spent all this time on it, why would I want someone else to be the first to use it in a practical application).