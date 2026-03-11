#lang racket/base
(require pollen/tag pollen/file pollen/setup racket/list txexpr)
(provide (all-defined-out))

(module setup racket/base
  (provide (all-defined-out))
  (define poly-targets '(html txt md)))

(define (headline . elements)
  (case (current-poly-target)
    [(txt) (apply string-append (flatten elements))]
    [(md) (string-append "## " (apply string-append (flatten elements)))]
    [else (txexpr 'h2 empty elements)]))

(define (items . elements)
  (case (current-poly-target)
    [(txt md) (apply string-append (flatten elements))]
    [else (txexpr 'ul empty elements)]))

(define (item . elements)
  (case (current-poly-target)
    [(txt) (string-append "- " (apply string-append (flatten elements)) "\n")]
    [(md) (string-append "- " (apply string-append (flatten elements)) "\n")]
    [else (txexpr 'li empty (list (txexpr 'p empty elements)))]))

(define (link src . text)
  (define url (string-append "/" (path->string (->output-path src))))
  (define label (apply string-append (flatten text)))
  (case (current-poly-target)
    [(txt) (string-append label " (" url ")")]
    [(md) (string-append "[" label "](" url ")")]
    [else (string-append "<a href=\"" url "\">" label "</a>")]))
