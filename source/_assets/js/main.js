import HlJs from 'highlight.js/lib/core'
import javascript from 'highlight.js/lib/languages/javascript'
import python from 'highlight.js/lib/languages/python'
import php from 'highlight.js/lib/languages/php'
import bash from 'highlight.js/lib/languages/bash'
import css from 'highlight.js/lib/languages/css'
import json from 'highlight.js/lib/languages/json'
import markdown from 'highlight.js/lib/languages/markdown'
import http from 'highlight.js/lib/languages/http'
import sql from 'highlight.js/lib/languages/sql'
import xml from 'highlight.js/lib/languages/xml'
import dockerfile from 'highlight.js/lib/languages/dockerfile'
import yaml from 'highlight.js/lib/languages/yaml'
import apache from 'highlight.js/lib/languages/apache'
import nginx from 'highlight.js/lib/languages/nginx'

import mailProtect from './_mail-protect'

// Syntax highlighter
HlJs.registerLanguage('javascript', javascript)
HlJs.registerLanguage('python', python)
HlJs.registerLanguage('php', php)
HlJs.registerLanguage('bash', bash)
HlJs.registerLanguage('css', css)
HlJs.registerLanguage('json', json)
HlJs.registerLanguage('markdown', markdown)
HlJs.registerLanguage('http', http)
HlJs.registerLanguage('sql', sql)
HlJs.registerLanguage('xml', xml)
HlJs.registerLanguage('apache', apache)
HlJs.registerLanguage('dockerfile', dockerfile)
HlJs.registerLanguage('nginx', nginx)
HlJs.registerLanguage('yaml', yaml)
HlJs.highlightAll()

// Generate permalinks from h1 in articles
if (document.body.classList.contains('article-view')) {
    document.querySelectorAll('h1:not(.title)').forEach((item) => {
        let originalText = item.innerText
        let permaText = originalText.replace(/[^a-z0-9_]+/gi, '-').replace(/^-|-$/g, '').toLowerCase()
        item.innerHTML = `${originalText} <a class="article-permalink" href="#${permaText}">&para;</a>`
        item.id = permaText
    })
}

// Decode emails
document.querySelectorAll(".email-secure").forEach((item) => {
    let originalHtml = item.innerHTML
    let encoded = item.dataset.email
    let decodedEmail = mailProtect.decodeEmail(encoded)

    item.innerHTML = originalHtml + decodedEmail
    item.href = 'mailto:' + decodedEmail
})