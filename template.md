◊(require racket/string (only-in txexpr get-tag get-attrs get-elements txexpr? attr-ref))◊(define (xexpr->md x)
  (cond
    [(string? x) x]
    [(txexpr? x)
     (define tag (get-tag x))
     (define body (string-join (map xexpr->md (get-elements x)) ""))
     (case tag
       [(root) body]
       [(p) (string-append body "\n\n")]
       [(h1) (string-append "# " body "\n\n")]
       [(h2) (string-append "## " body "\n\n")]
       [(h3) (string-append "### " body "\n\n")]
       [(h4) (string-append "#### " body "\n\n")]
       [(em) (string-append "*" body "*")]
       [(strong) (string-append "**" body "**")]
       [(ul ol) (string-append body "\n")]
       [(li) (string-append "- " body "\n")]
       [(blockquote) (string-append "> " body "\n\n")]
       [(a) (string-append "[" body "](" (attr-ref (get-attrs x) 'href) ")")]
       [else body])]
    [else ""]))◊(xexpr->md doc)