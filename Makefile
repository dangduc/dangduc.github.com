PP_FILES := $(wildcard *.pp)
PMD_FILES := $(filter-out %.poly.pmd,$(wildcard *.pmd))
POLY_FILES := $(wildcard *.poly.pmd)
PP_OUTPUT := $(PP_FILES:.pp=)
PMD_OUTPUT := $(PMD_FILES:.pmd=)
POLY_HTML := $(POLY_FILES:.poly.pmd=.html)
POLY_TXT := $(POLY_FILES:.poly.pmd=.txt)
POLY_MD := $(POLY_FILES:.poly.pmd=.md)
OUTPUT_FILES := $(PP_OUTPUT) $(PMD_OUTPUT) $(POLY_HTML) $(POLY_TXT) $(POLY_MD)

all: $(OUTPUT_FILES)

# pp sources
$(PP_OUTPUT): %: %.pp
	raco pollen render $<

# pmd sources (non-poly)
$(PMD_OUTPUT): %: %.pmd
	raco pollen render $<

# poly sources
$(POLY_HTML): %.html: %.poly.pmd
	raco pollen render $*.html

$(POLY_TXT): %.txt: %.poly.pmd
	raco pollen render $*.txt

$(POLY_MD): %.md: %.poly.pmd
	raco pollen render $*.md

clean:
	rm -f $(OUTPUT_FILES)

.PHONY: all clean
