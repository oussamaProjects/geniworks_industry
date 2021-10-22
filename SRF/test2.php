<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://unpkg.com/tachyons@4.11.1/css/tachyons.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="report-body">
  
  <!-- Report Header, First Page Only -->
  <div class="report-heading mb4">
    <table class="collapse w-100 mt2">
      <tr>
        <td class="w-70 tl">
          <!-- h1 class="f1-l f2-m f4-ns fw4 ma0 fg-rosebud" -->
          <h1 class="f2 fw5 ma0 fg-rosebud">
            TruSight<sup><small class="fg-rosebud">&trade;</small></sup> Oncology 500
          </h1>
          <small class="powered-by dib fg-gray-3 v-mid pb1">
            Powered By
            <img src="https://www.dropbox.com/s/smb5m29erwncn0o/logo-text-horizontal-transparent-lightbg.png?raw=1" height="16" class="v-mid"/>
          </small>
        </td>
        <td class="w-30 tr">
          <div class="dib fr">
            <img src="https://via.placeholder.com/60/EFF2F7/C0CCDA/?text=Logo" />
          </div>
          <div class="client-address">
            <div class="address tr f5 fg-gray-4">
              PierianDx<br/>
              77 Maryland Plaza<br/>
              St. Louis, MO 63108
            </div>
          </div>
        </td>
      </tr>
    </table>
    <div class="flex justify-around pt1 pb1 bt bw1 border-rosebud--5 bg-gray-10">
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Patient</div>
        <div class="fw4">John Doe</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">DOB</div>
        <div class="fw4">02/04/1981</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Disease</div>
        <div class="fw4">Non-small cell Lung Cancer and some more things wrong</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Medical Rec. #</div>
        <div class="fw4">6563465346</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Report Date</div>
        <div class="fw4">02/18/2019</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Report Status</div>
        <div class="fw4">Final</div>
      </div>
    </div>
    <!-- Patient Summary Row 
    <table class="patient-summary w-100 bt bw1 border-rosebud--5 bg-gray-10" cellpadding="4">
      <tr>
        <td class="pa3">
          <div class="ttu f7 fg-gray-3">Patient</div>
          <div class="f6 fw4">John Doe</div>
        </td>
        <td class="pa3">
          <div class="ttu f7 fg-gray-3">DOB</div>
          <div class="f6 fw4">02/04/1981</div>
        </td>
        <td class="pa3">
          <div class="ttu f7 fg-gray-3">Disease</div>
          <div class="f6 fw4">Non-small cell Lung Cancer</div>
        </td>
        <td class="pa3">
          <div class="ttu f7 fg-gray-3">Medical Rec. #</div>
          <div class="f6 fw4">6563465346</div>
        </td>
        <td class="pa3">
          <div class="ttu f7 fg-gray-3">Report Date</div>
          <div class="f6 fw4">02/18/2019</div>
        </td>
        <td class="pa3">
          <div class="ttu f7 fg-gray-3">Report Status</div>
          <div class="f6 fw4">Final</div>
        </td>
      </tr>
    </table>
    -->
  </div>

  <!-- Running Elements (Header, Footer) for 2-n pages -->
  <!-- These are pulled out in @media print, hidden in @media screen -->
  <section class="page-heading section pa1 bg-gray-10 mt2">
    <div class="pa0 pb1 pr3 relative">
      <h1 class="dib f5 fw4 ma0 fg-rosebud">
        TruSight<sup><small>&trade;</small></sup> Oncology 500
      </h1>
      <small class="fr powered-by dib fg-gray-3 v-mid">
        Powered By
        <img src="https://www.dropbox.com/s/smb5m29erwncn0o/logo-text-horizontal-transparent-lightbg.png?raw=1" height="14" class="v-mid"/>
      </small>
    </div>
    <div class="flex justify-around pt1 pb1 bt bw1 border-rosebud--5">
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Patient</div>
        <div class="fw4">John Doe</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">DOB</div>
        <div class="fw4">02/04/1981</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Disease</div>
        <div class="fw4">Non-small cell Lung Cancer</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Medical Rec. #</div>
        <div class="fw4">6563465346</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Report Date</div>
        <div class="fw4">02/18/2019</div>
      </div>
      <div class="flex flex-column">
        <div class="ttu f7 fg-gray-3">Report Status</div>
        <div class="fw4">Final</div>
      </div>
    </div>
  </section>

  <section class="page-footer section bt pa1 bw1 border-gray-5 bg-gray-10 h-100">
    <div class="flex justify-around">
      <div>Left Footer</div>
      <div>
        <span class="page-number"></span>
      </div>
    </div>
  </section>


  <!-- Report Summary - Front page only -->
  <section class="section">
    <h2 class="f3 fw4 ma0 ml1">Report Summary</h2>
    <!-- This layout is a hack to work around bugs in PDFReactor -->
    <div class="dib cf">
      <div class="dib fl pa1 pb0">
        <div class="status is-level-A">
          <span class="status__value">2</span>
          <span class="status__desc">IA</span>
        </div>
      </div>
      <div class="dib fl pa1 pb0">
        <div class="status is-level-B">
          <span class="status__value">0</span>
          <span class="status__desc">IB</span>
        </div>
      </div>
      <div class="dib fl pa1 pb0">
        <div class="status is-level-C">
          <span class="status__value">1</span>
          <span class="status__desc">IIC</span>
        </div>
      </div>
      <div class="dib fl pa1 pb0">
        <div class="status is-level-D">
          <span class="status__value">0</span>
          <span class="status__desc">IID</span>
        </div>
      </div>
      <div class="dib fl pa1 pb0">
        <div class="status is-tmb">
          <span class="status__value">High</span>
        </div>
      </div>
      <div class="dib fl pa1 pb0">
        <div class="status is-msi">
          <span class="status__value">Stable</span>
        </div>
      </div>
      <div class="dib fl pa1 pb0">
        <div class="status is-clinical-trials">
          <span class="status__value">13</span>
        </div>
      </div>
    </div>
    <br/>
    <div class="dib cf">
      <div class="dib fl pa1 pv0" style="width: 17.5rem">
        <span class="ma1 pl1 ttu fw5 fg-gray-3">
          Genomic Findings
          <span class="fw1">By Tier + Level</span>
        </span>
      </div>
      <div class="dib fl pa1 pv0" style="width: 4.5rem">
        <span class="ma1 pl1 ttu fw5 fg-gray-3">TMB</span>
      </div>
      <div class="dib fl pa1 pv0" style="width: 5.5rem">
        <span class="ma1 pl1 ttu fw5 fg-gray-3">MSI</span>
      </div>
      <div class="dib fl pa1 pv0">
        <span class="ma1 pl1 ttu fw5 fg-gray-3">Trials</span>
      </div>
    </div>
    <!-- end PDFReactor Hack -->
  </section>

  <!-- Genomic Findings Summary - First page only -->
  <section id="genomic-findings" class="section">
    <div class="section__header">Genomic Findings</div>

    <!-- Example empty state for a section -->
    <h2 class="fw6">Tier I - Strong Clinical Significance (empty)</h2>
    <table class="table collapse">
      <tbody>
        <tr>
          <td colspan="3" class="tc pa2 bg-gray-10">
            <p class="fg-gray-4">No variants identified for this classification.</p>
          </td>
        </tr>
      </tbody>
    </table>

    <h2 class="fw6">Tier I - Strong Clinical Significance</h2>
    <table class="table collapse">
      <thead>
        <tr>
          <th class="tl w-10">Variant</th>
          <th class="tc w-10">Level</th>
          <th class="tl">Interpretation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="stack">
              <span class="stack__item title">MUTYH</span>
              <span class="stack__item subtitle muted">p.S512F</span>
              <span class="stack__item subtitle muted">c.1535C&gt;T</span>
            </div>
          </td>
          <td class="tc">
            <span class="label is-level-A">A</span>
          </td>
          <td>
            <span class="fw6">May benefit from</span>
            <ul class="list">
              <li>Cabozantinib, Vandatinib <em>in non-small cell lung cancer</em></li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>
    <h2 class="fw7">Tier II - Potential Clinical Significance</h2>
    <table class="table collapse">
      <thead>
        <tr>
          <th class="tl w-10">Variant</th>
          <th class="tc w-10">Level</th>
          <th class="tl">Interpretation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="stack">
              <span class="stack__item title">JAK1</span>
              <span class="stack__item subtitle muted">p.(=)</span>
              <span class="stack__item subtitle muted">c.129G&gt;C</span>
            </div>
          </td>
          <td class="tc">
            <span class="label is-level-D">D</span>
          </td>
          <td>
            <span class="fw6">Not likely to benefit from</span>
            <ul class="list">
              <li>Erlotinib, Gefitinib, Afatinib, Osimertinib, Dacomitinib <em>in non-small cell lung cancer</em></li>
            </ul>
            <span class="fw6">Unfavorable prognosis in</span>
            <ul class="list">
              <li>non-small cell lung cancer</li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>
    <h2 class="fw7">Other Biomarkers</h2>
    <table class="table collapse">
      <thead>
        <tr>
          <th class="tl w-10">Variant</th>
          <th class="tc w-10">Level</th>
          <th class="tr w-10">Value</th>
          <th class="tl w-70">Interpretation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="stack">
              <span class="stack__item title">TMB</span>
            </div>
          </td>
          <td class="tc">
            <span class="label is-tmb">high</span>
          </td>
          <td class="tr">
            <span class="dib">24</span><br/>
            <span class="dib fg-gray-4">
              <small>muts/Mb</small>
            </span>
          </td>
          <td>
            <span class="fw6">May benefit from</span>
            <ul class="list">
              <li>E- Nivolumab, Nivolumab + Ipilimumab <em>in non-small cell lung cancer</em></li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>
            <div class="stack">
              <span class="stack__item title">MSI</span>
            </div>
          </td>
          <td class="tc">
            <span class="label is-msi">stable</span>
          </td>
          <td class="tr">
            <span class="dib">5%</span><br/>
            <span class="dib fg-gray-4">
              <small>Unstable Sites</small>
            </span>
          </td>
          <td>
            &nbsp;
          </td>
        </tr>
      </tbody>
    </table>
  </section>

  <!-- Patient and Order Details -->
  <section id="patient-order-details" class="section">
    <div class="section__header">Patient &amp; Order Details</div>
    <div class="flex justify-around bg-gray-10 pa2 full-section-width">
      <div class="flex-auto ma2">
        <div class="ttu bb fw5 fg-gray-2 border-gray-6 mb2">
          Patient
        </div>
        <div class="flex-column">
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Date of Birth</label>
            <div>02/04/1981</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Sex</label>
            <div>Male</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Ethnicity</label>
            <div>Not Hispanic or Latino</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Race</label>
            <div>White</div>
          </div>
        </div>
      </div>
      <div class="flex-auto ma2">
        <div class="ttu bb fw5 fg-gray-2 border-gray-6 mb2">
          Physician
        </div>
        <div class="flex-column">
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Ordering Physician</label>
            <div>Bruce Banner</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Facility</label>
            <div>Chicago Hope</div>
          </div>
        </div>
      </div>
      <div class="flex-auto ma2">
        <div class="ttu bb fw5 fg-gray-2 border-gray-6 mb2">
          Specimen
        </div>
        <div class="flex-column">
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Specimen Type</label>
            <div>Specimen from lung</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Ext. Specimen Id</label>
            <div>48998243</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Date Collected</label>
            <div>02/05/2019 13:53</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Date Received</label>
            <div>02/08/2019 12:44</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">% Tumor in Selected Area</label>
            <div>25</div>
          </div>
        </div>
      </div>
      <div class="flex-auto ma2">
        <div class="ttu bb fw5 fg-gray-2 border-gray-6 mb2">
          Case
        </div>
        <div class="flex-column">
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Review Status</label>
            <div>Final</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Date Accessioned</label>
            <div>02/15/2019</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Date Reported</label>
            <div>Not Available</div>
          </div>
          <div class="mb1">
            <label class="ttu fg-gray-4 f7">Accession #</label>
            <div>ILMN_447</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Clinically Relevant Results Section -->
  <section id="relevant-results" class="section">
    <div class="section__header">Clinically Relevant Results</div>
    <h2 class="fw7">Tier I - Strong Clinical Significance</h2>

    <table class="table collapse">
      <thead>
        <tr>
          <th class="tl w-20">Variant</th>
          <th class="tl w-80">Interpretation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="stack">
              <span class="stack__item title">MUTYH</span>
              <span class="stack__item subtitle">p.S512F</span>
              <span class="stack__item subtitle">c.1535C&gt;T</span>
              <span class="stack__item">
                <span class="label is-level-A">A</span>
              </span>
              <span class="stack__item meta">NM_012222.2</span>
              <span class="stack__item meta"><strong>VAF%</strong> 52.3</span>
              <span class="stack__item meta"><strong>DEPTH</strong> 348</span>
            </div>
          </td>
          <td>(1) A recent phase 3 trial assessed ceritinib versus platinum-based chemotherapy as first-line therapy for patients with ALK-positive metastatic NSCLC. PFS was improved when using ceritinib when compared with platinum-based chemotherapy; the median PFS was 16.6 months (95% CI, 12.6-27.2) for ceritinib and 8.1 months (95% CI, 5.8-11.1) for chemotherapy (HR, 0.55 [95% CI, 0.42-0.73]; P&lt; .00001). For ceritinib, common adverse events included diarrhea (85% [160/189] of patients), nausea (69% [130/189]), vomiting (66% [125/189]), and an increase in ALT (60% [114/189]). For chemotherapy, common adverse events included nausea (55% [97/175 patients]), vomiting (36% [63/175]), and anemia (35% [62/175]). The NCCN Panel recommends (category 1) ceritinib as first-line therapy for patients with ALK-positive metastatic NSCLC based on this phase 3 trial and FDA approval. (2) For patients who progress on first-line alectinib, brigatinib, or ceritinib, subsequent treatment for ALK-positive NSCLC includes lorlatinib or the initial systemic therapy regimens that are used for first-line treatment of NSCLC (eg, carboplatin/paclitaxel) depending on the type of progression. Continuing alectinib, brigatinib, crizotinib, or ceritinib with or without local therapy (eg, SABR, stereotactic radiosurgery [SRS], or surgery) may also be appropriate for select patients who progress on these agents depending on the type of progression. (3) Ceritinib is approved by the FDA for patients with ALK-positive metastatic NSCLC who have progressed on or are intolerant to crizotinib. The approval is based on an expanded phase 1 study (ASCEND-1) showing overall response rates of 56% to ceritinib in patients (92/163) who had previously received crizotinib; the median duration of response was 8.3 months (6.8-9.7). Common grade 3 to 4 adverse events included increased ALT (73 [30%] patients) and increased AST (25 [10%]). Some patients with CNS lesions responded to ceritinib. Based on the study and the FDA approval, the NCCN Panel recommends ceritinib as subsequent therapy for patients with ALK-positive NSCLC who have progressed after crizotinib. Patients who do not tolerate crizotinib may be switched to alectinib, ceritinib, or brigatinib, if not previously given. (4) A recent phase 3 trial (ASCEND-5) assessed subsequent therapy with ceritinib versus chemotherapy (with pemetrexed or docetaxel) in patients with advanced ALK-positive NSCLC who had previously received at least 2 or more treatments (including chemotherapy and crizotinib) and had progressed.736 Patients receiving ceritinib had a significant improvement in median PFS when compared with chemotherapy (5.4 months [95% CI, 4.1-6.9] for ceritinib vs. 1.6 months [1.4-2.8] for chemotherapy; HR, 0.49 [0.36-0.67]; P &lt; .0001). Serious adverse events were reported in 43% (49/115) of patients receiving ceritinib versus 32% (36/113) of those receiving chemotherapy. A phase 2 trial (ASCEND-2) assessed ceritinib in patients who had previously received at least 2 or more treatments, had progressed on crizotinib, and had brain metastases.735 The overall response rate was 38%; the duration of response was 9.7 months (95% CI, 7.1-11.1). The intracranial overall response rate was 45.0% (95% CI, 23.1%-68.5%). (5) Targeted therapy and consideration of local therapy (eg, surgery or SABR [or SRS] for isolated lesions) is recommended for patients with ALK rearrangements or sensitizing EGFR mutations who have progressed on targeted therapy, depending on the type of progression.</td>
        </tr>
      </tbody>
    </table>

    <h2 class="fw7">Tier II - Potential Clinical Significance</h2>

    <table class="table collapse">
      <thead>
        <tr>
          <th class="tl w-20">Variant</th>
          <th class="tl w-80">Interpretation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="stack">
              <span class="stack__item title">JAK1</span>
              <span class="stack__item subtitle">p.(=)</span>
              <span class="stack__item subtitle">c.129G&gt;C</span>
              <span class="stack__item">
                <span class="label is-level-D">D</span>
              </span>
              <span class="stack__item meta">NM_002227.2</span>
              <span class="stack__item meta"><strong>VAF%</strong> 3.7</span>
              <span class="stack__item meta"><strong>DEPTH</strong> 408</span>
            </div>
          </td>
          <td>This is an interpretation for JAK1</td>
        </tr>
      </tbody>
    </table>
  </section>

  <section id="clinical-trials" class="section">
    <div class="section__header">Potential Clinical Trials</div>
    <p class="muted">Clinical Trials associated with this patient's genomic profile and tumor type are displayed below.</p>

    <table class="table collapse">
      <thead>
        <tr>
          <th class="tl w-50">TITLE</th>
          <th class="tl">TRIAL IDENTIFIER</th>
          <th class="tl">PHASE </th>
          <th class="tl">VARIANT</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="f6">
            A Phase 3 Study of Erdafitinib Compared With Vinflunine or Docetaxel or Pembrolizumab in Subjects With Advanced Urothelial Cancer and Selected FGFR Gene Aberrations
          </td>
          <td>
            <div><span class="fw5">NCT03390504</span></div>
            <a class="f7" href="https://clinicaltrials.gov/show/NCT03390504">https://clinicaltrials.gov/show/NCT03390504</a>
          </td>
          <td>
            <div>III</div>
          </td>
          <td>
            <div class="stack">
              <span class="stack__item title">FGFR3</span>
              <span class="stack__item subtitle muted">p.L246R</span>
              <span class="stack__item subtitle muted">c.737T&gt;G</span>
            </div>
          </td>
        </tr>
        <tr>
          <td class="f6">
            Phase II Study of the PARP Inhibitor BMN 673 (Talazoparib Tosylate) in Advanced Cancer Patients With Somatic Alterations in BRCA1/2, Mutations/Deletions in PTEN or PTEN Loss, a Homologous Recombination Defect, Mutations/Deletions in Other BRCA Pathway Genes and Germline Mutation in BRCA1/2 (Not Breast or Ovarian Cancer)
          </td>
          <td>
            <div><span class="fw5">NCT02286687</span></div>
            <a class="f7" href="https://clinicaltrials.gov/show/NCT02286687">https://clinicaltrials.gov/show/NCT02286687</a>
          </td>
          <td>
            <div>II</div>
          </td>
          <td>
            <div class="stack">
              <span class="stack__item title">ARID1A</span>
              <span class="stack__item subtitle muted">p.A45del</span>
              <span class="stack__item subtitle muted">c.126_128delGGC</span>
            </div>
          </td>
        </tr>

        <tr>
          <td class="f6">
            NCI-COG Pediatric MATCH (Molecular Analysis for Therapy Choice) Screening Protocol
          </td>
          <td>
            <div><span class="fw5">NCT03155620</span></div>
            <a class="f7" href="https://clinicaltrials.gov/show/NCT03155620">https://clinicaltrials.gov/show/NCT03155620</a>
          </td>
          <td>
            <div>II</div>
          </td>
          <td>
            <div class="stack">
              <span class="stack__item title">FGFR3</span>
              <span class="stack__item subtitle muted">p.L246R</span>
              <span class="stack__item subtitle muted">c.737T&gt;G</span>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </section>

  <!-- Uncertain Variants -->
  <section id="uncertain-variants" class="section">
    <div class="section__header">Tier III - Variants of Uncertain Significance</div>
    <div class="flex flex-row flex-wrap">
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
      <div class="pa2 br2 bg-gray-8 ma1">
        <div class="stack items-center">
          <span class="stack__item title">AKT3</span>
          <span class="stack__item subtitle muted">p.P449S</span>
          <span class="stack__item subtitle muted">NM_001206729.1</span>
          <span class="stack__item subtitle muted">c.1345C>T</span>
        </div>
      </div>
    </div>
  </section>

  <section id="classification-levels" class="section">
    <div class="section__header">Classification and Levels of Evidence</div>
    <p>
      The variant classification system used in this report is based on joint consensus recommendations of the Association for Molecular Pathology, American Society of Clinical Oncology, and the College of American Pathologists (J Mol Diagn 2017, 19:4-23). Tiers IA, IB, IIC, IID, III and IV describe variant categories of descending clinical significance in the patient. Variants in Tier IV are not reported in accordance with the consensus recommendations.
    </p>
    <div class="classification-table flex flex-row justify-around">
      <div class="br2 bg-data-7--2 ma2 w-25">
        <div class="bg-data-7 br2--top f3 fg-white fw5 pa2 tc">IA</div>
        <p class="f6 ph2">
          Variant of strong clinical significance, Level A evidence (FDA approved therapy or practice guideline in patient's tumor type)
        </p>
      </div>
      <div class="br2 bg-data-6--2 ma2 w-25">
        <div class="bg-data-6 br2--top f3 fg-white fw5 pa2 tc">IB</div>
        <p class="f6 ph2">
          Variant of strong clinical significance, Level B Evidence (consensus in the field based on well-powered studies in patient's tumor type)
        </p>
      </div>
      <div class="br2 bg-data-5--2 ma2 w-25">
        <div class="bg-data-5 br2--top f3 fg-white fw5 pa2 tc">IIC</div>
        <p class="f6 ph2">
          Variant of potential clinical significance, Level C evidence (FDA approved therapy or practice guideline in other tumor type(s), evidence from multiple small published studies, or based on availability of investigational therapies)
        </p>
      </div>
      <div class="br2 bg-data-4--2 ma2 w-25">
        <div class="bg-data-4 br2--top f3 fg-white fw5 pa2 tc">IID</div>
        <p class="f6 ph2">
          Variant of potential clinical significance, Level D evidence (case reports or preclinical studies)
        </p>
      </div>
    </div>
    <div class="flex">
      <div class="relative br2 bg-data-3--2 ma2 w-50 o-hidden">
        <div class="absolute top-0 left-0 bottom-0 dib w-20 tall bg-data-3 br2--left f3 fg-white fw5 pa2 tc">III</div>
        <p class="dib f6 ml2 pl--20">
          Variant of uncertain clinical significance
        </p>
      </div>
      <div class="relative br2 bg-data-2--2 ma2 w-50 o-hidden">
        <div class="absolute top-0 left-0 bottom-0 dib w-20 tall bg-data-2 br2--left f3 fg-white fw5 pa2 tc">IV</div>
        <p class="dib f6 ml2 pl--20">
          Benign or likely benign variant
        </p>
      </div>
    </div>
  </section>
  
  <section id="test-details" class="section">
    <div class="section__header">Test Details</div>

    <div class="flex justify-around pa2">
      <div class="flex flex-column w-third pa1">
        <div class="ttu bb fw5 fg-gray-2 border-gray-6 mb2">
          Reported Genes
        </div>
        <p class="fg-gray-3">
          A total of 522 genes were subjected to targeted next generation sequencing analysis. Detailsavailable upon request. 
        </p>
      </div>
      <div class="flex flex-column w-third pa1">
        <div class="ttu bb fw5 fg-gray-2 border-gray-6 mb2">
          CGW Version
        </div>
        <p class="fg-gray-3">
          CGW_v6.8
        </p>
      </div>
      <div class="flex flex-column w-third pa1">
        <div class="ttu bb fw5 fg-gray-2 border-gray-6 mb2">
          Database Details
        </div>
        <p class="fg-gray-3">The versions, releases, builds, dates of the following databases were used to generate this report.</p>
        <ul class="list pl0 fg-gray-3">
          <li class="fg-gray-2">Genomic Build: GRCh37.p13</li>
          <li class="fg-gray-2">Genomic Anotation Sources: NCBI RefSeq v105</li>
          <li class="fg-gray-2">dbNSFP: 3.0b2c</li>
          <li class="fg-gray-2">ExAC: v1.0</li>
          <li class="fg-gray-2">NHLBI ESP: v.0.0.30</li>
          <li class="fg-gray-2">ClinVar: 20150603</li>
          <li class="fg-gray-2">dbSNP: 149</li>
          <li class="fg-gray-2">COSMIC: v71</li>
        </ul>
      </div>
    </div>
    <div class="pa2">
      <div class="ttu bb fw5 fg-gray-2 border-gray-6 mb2">
        Coding Exon Coverage Metrics
      </div>
      <p>
        Level 2: 100x coverage for > 90% of positions was not achieved for the targeted exon regions listed below:
      </p>
      <div class="inline-flex flex-column items-center">
<!--         <div class="ph2"><strong>Legend</strong></div> -->
        <div class="pa2 br2 bg-gray-8 ma1 o-70">
          <div class="stack items-center">
            <span class="stack__item title">Gene</span>
            <span class="stack__item subtitle muted">Transcript ID</span>
            <span class="stack__item subtitle muted">(Exon/Intron('))</span>
          </div>
        </div>
      </div>
      <div class="flex flex-row flex-wrap bt border-gray-8--5">
        <div class="pa2 br2 bg-gray-8 ma1">
          <div class="stack items-center">
            <span class="stack__item title">BRD4</span>
            <span class="stack__item subtitle muted">NM_058243.2 (14)</span>
          </div>
        </div>
        <div class="pa2 br2 bg-gray-8 ma1">
          <div class="stack items-center">
            <span class="stack__item title">BRD4</span>
            <span class="stack__item subtitle muted">NM_058243.2 (14)</span>
          </div>
        </div>
        <div class="pa2 br2 bg-gray-8 ma1">
          <div class="stack items-center">
            <span class="stack__item title">BRD4</span>
            <span class="stack__item subtitle muted">NM_058243.2 (14)</span>
          </div>
        </div>
        <div class="pa2 br2 bg-gray-8 ma1">
          <div class="stack items-center">
            <span class="stack__item title">BRD4</span>
            <span class="stack__item subtitle muted">NM_058243.2 (14)</span>
          </div>
        </div>
        <div class="pa2 br2 bg-gray-8 ma1">
          <div class="stack items-center">
            <span class="stack__item title">BRD4</span>
            <span class="stack__item subtitle muted">NM_058243.2 (14)</span>
          </div>
        </div>
        <div class="pa2 br2 bg-gray-8 ma1">
          <div class="stack items-center">
            <span class="stack__item title">BRD4</span>
            <span class="stack__item subtitle muted">NM_058243.2 (14)</span>
          </div>
        </div>
        <div class="pa2 br2 bg-gray-8 ma1">
          <div class="stack items-center">
            <span class="stack__item title">BRD4</span>
            <span class="stack__item subtitle muted">NM_058243.2 (14)</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="disclaimer" class="section">
    <div class="section__header">Disclaimer</div>
    <p>This Report was generated using the materials and methods described above, which required the use ofvarious reagents, protocols, instruments, software, databases, and other items, some of which wereprovided or made accessible by third parties. A defect or malfunction in any such reagents, protocols,instruments, software, databases, and/or other items may compromise the quality or accuracy of theReport. The Report has been created based on, or incorporates references to, various scientific manuscripts,references, and other sources of information, including without limitation manuscripts, references, andother sources of information that were prepared by third parties that describe correlations betweencertain genetic mutations and particular diseases (and/or certain therapeutics that may be useful inameliorating the effects of such diseases). Such information and correlations are subject to change overtime in response to future scientific and medical findings. PierianDx makes no representation or warrantyof any kind, expressed or implied, regarding the accuracy of the information provided by or contained insuch manuscripts, references, and other sources of information. If any of the information provided by orcontained in such manuscripts, references, and other sources is later determined to be inaccurate, theaccuracy and quality of the Report may be adversely impacted. PierianDx is not obligated to notify you ofany impact that future scientific or medical research findings may have on the Report. The Report must always be interpreted and considered within the clinical context, and a physicianshould always consider the Report along with all other pertinent information and data that a physicianwould prudently consider prior to providing a diagnosis to a patient or developing and implementing aplan of care for a patient. The Report should never be considered or relied upon alone in making anydiagnosis or prognosis. The manifestation of many diseases are caused by more than one gene variant, asingle gene variant may be relevant to more than one disease, and certain relevant gene variants may nothave been considered in the Report. In addition, many diseases are caused or influenced by modifiergenes, epigenetic factors, environmental factors, and other variables that are not addressed by theReport (or that are otherwise unknown). This Report is based on a next generation sequencing assaywhich does not distinguish between somatic and germline variants. If a germline variant is in question,further testing may be recommended. As such, the relevance of the Report should be interpreted in thecontext of a patient's clinical manifestations. The Report provided by PierianDx is provided on an "AS IS"basis. PierianDx makes no representation or warranty of any kind, expressed or implied, regarding theReport. In no event shall PierianDx be liable for any actual damages, indirect damages, and/or special orconsequential damages arising out of or in any way connected with the Report, your use of the Report,your reliance on the Report, or any defect or inaccurate information included within the Report. Medical knowledge annotation is constantly updated and reflects the current knowledge at the time. The test performance characteristics were determined by the Molecular Diagnostic Laboratory at Pi. Thetest performance characteristics were determined by the PierianDx Molecular Laboratory. The Reportwas generated by the PierianDx Molecular Laboratory as required by the CLIA 1988 regulations. TheReport, and the tests used to generate the Report, have not been cleared or approved by the U.S. Food and Drug Administration (FDA). The FDA has determined that such clearance or approval is notnecessary. The test results have been shown to be clinically useful. This laboratory is CLIA certified toperform high complexity testing.
    </p>
  </section>
</div>
<style>
	@import url("https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900");
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i");
.report-body .fg-white {
  color: #FFFFFF !important;
}
.report-body .bg-white {
  background-color: #FFFFFF !important;
}
.report-body .border-white {
  border-color: #FFFFFF !important;
}
.report-body .fg-white--025 {
  color: rgba(255, 255, 255, 0.025) !important;
}
.report-body .bg-white--025 {
  background-color: rgba(255, 255, 255, 0.025) !important;
}
.report-body .border-white--025 {
  border-color: rgba(255, 255, 255, 0.025) !important;
}
.report-body .fg-white--05 {
  color: rgba(255, 255, 255, 0.05) !important;
}
.report-body .bg-white--05 {
  background-color: rgba(255, 255, 255, 0.05) !important;
}
.report-body .border-white--05 {
  border-color: rgba(255, 255, 255, 0.05) !important;
}
.report-body .fg-white--1 {
  color: rgba(255, 255, 255, 0.1) !important;
}
.report-body .bg-white--1 {
  background-color: rgba(255, 255, 255, 0.1) !important;
}
.report-body .border-white--1 {
  border-color: rgba(255, 255, 255, 0.1) !important;
}
.report-body .fg-white--2 {
  color: rgba(255, 255, 255, 0.2) !important;
}
.report-body .bg-white--2 {
  background-color: rgba(255, 255, 255, 0.2) !important;
}
.report-body .border-white--2 {
  border-color: rgba(255, 255, 255, 0.2) !important;
}
.report-body .fg-white--3 {
  color: rgba(255, 255, 255, 0.3) !important;
}
.report-body .bg-white--3 {
  background-color: rgba(255, 255, 255, 0.3) !important;
}
.report-body .border-white--3 {
  border-color: rgba(255, 255, 255, 0.3) !important;
}
.report-body .fg-white--4 {
  color: rgba(255, 255, 255, 0.4) !important;
}
.report-body .bg-white--4 {
  background-color: rgba(255, 255, 255, 0.4) !important;
}
.report-body .border-white--4 {
  border-color: rgba(255, 255, 255, 0.4) !important;
}
.report-body .fg-white--5 {
  color: rgba(255, 255, 255, 0.5) !important;
}
.report-body .bg-white--5 {
  background-color: rgba(255, 255, 255, 0.5) !important;
}
.report-body .border-white--5 {
  border-color: rgba(255, 255, 255, 0.5) !important;
}
.report-body .fg-white--6 {
  color: rgba(255, 255, 255, 0.6) !important;
}
.report-body .bg-white--6 {
  background-color: rgba(255, 255, 255, 0.6) !important;
}
.report-body .border-white--6 {
  border-color: rgba(255, 255, 255, 0.6) !important;
}
.report-body .fg-white--7 {
  color: rgba(255, 255, 255, 0.7) !important;
}
.report-body .bg-white--7 {
  background-color: rgba(255, 255, 255, 0.7) !important;
}
.report-body .border-white--7 {
  border-color: rgba(255, 255, 255, 0.7) !important;
}
.report-body .fg-white--8 {
  color: rgba(255, 255, 255, 0.8) !important;
}
.report-body .bg-white--8 {
  background-color: rgba(255, 255, 255, 0.8) !important;
}
.report-body .border-white--8 {
  border-color: rgba(255, 255, 255, 0.8) !important;
}
.report-body .fg-white--9 {
  color: rgba(255, 255, 255, 0.9) !important;
}
.report-body .bg-white--9 {
  background-color: rgba(255, 255, 255, 0.9) !important;
}
.report-body .border-white--9 {
  border-color: rgba(255, 255, 255, 0.9) !important;
}
.report-body .fg-black {
  color: #1F2D3D !important;
}
.report-body .bg-black {
  background-color: #1F2D3D !important;
}
.report-body .border-black {
  border-color: #1F2D3D !important;
}
.report-body .fg-black--025 {
  color: rgba(31, 45, 61, 0.025) !important;
}
.report-body .bg-black--025 {
  background-color: rgba(31, 45, 61, 0.025) !important;
}
.report-body .border-black--025 {
  border-color: rgba(31, 45, 61, 0.025) !important;
}
.report-body .fg-black--05 {
  color: rgba(31, 45, 61, 0.05) !important;
}
.report-body .bg-black--05 {
  background-color: rgba(31, 45, 61, 0.05) !important;
}
.report-body .border-black--05 {
  border-color: rgba(31, 45, 61, 0.05) !important;
}
.report-body .fg-black--1 {
  color: rgba(31, 45, 61, 0.1) !important;
}
.report-body .bg-black--1 {
  background-color: rgba(31, 45, 61, 0.1) !important;
}
.report-body .border-black--1 {
  border-color: rgba(31, 45, 61, 0.1) !important;
}
.report-body .fg-black--2 {
  color: rgba(31, 45, 61, 0.2) !important;
}
.report-body .bg-black--2 {
  background-color: rgba(31, 45, 61, 0.2) !important;
}
.report-body .border-black--2 {
  border-color: rgba(31, 45, 61, 0.2) !important;
}
.report-body .fg-black--3 {
  color: rgba(31, 45, 61, 0.3) !important;
}
.report-body .bg-black--3 {
  background-color: rgba(31, 45, 61, 0.3) !important;
}
.report-body .border-black--3 {
  border-color: rgba(31, 45, 61, 0.3) !important;
}
.report-body .fg-black--4 {
  color: rgba(31, 45, 61, 0.4) !important;
}
.report-body .bg-black--4 {
  background-color: rgba(31, 45, 61, 0.4) !important;
}
.report-body .border-black--4 {
  border-color: rgba(31, 45, 61, 0.4) !important;
}
.report-body .fg-black--5 {
  color: rgba(31, 45, 61, 0.5) !important;
}
.report-body .bg-black--5 {
  background-color: rgba(31, 45, 61, 0.5) !important;
}
.report-body .border-black--5 {
  border-color: rgba(31, 45, 61, 0.5) !important;
}
.report-body .fg-black--6 {
  color: rgba(31, 45, 61, 0.6) !important;
}
.report-body .bg-black--6 {
  background-color: rgba(31, 45, 61, 0.6) !important;
}
.report-body .border-black--6 {
  border-color: rgba(31, 45, 61, 0.6) !important;
}
.report-body .fg-black--7 {
  color: rgba(31, 45, 61, 0.7) !important;
}
.report-body .bg-black--7 {
  background-color: rgba(31, 45, 61, 0.7) !important;
}
.report-body .border-black--7 {
  border-color: rgba(31, 45, 61, 0.7) !important;
}
.report-body .fg-black--8 {
  color: rgba(31, 45, 61, 0.8) !important;
}
.report-body .bg-black--8 {
  background-color: rgba(31, 45, 61, 0.8) !important;
}
.report-body .border-black--8 {
  border-color: rgba(31, 45, 61, 0.8) !important;
}
.report-body .fg-black--9 {
  color: rgba(31, 45, 61, 0.9) !important;
}
.report-body .bg-black--9 {
  background-color: rgba(31, 45, 61, 0.9) !important;
}
.report-body .border-black--9 {
  border-color: rgba(31, 45, 61, 0.9) !important;
}
.report-body .fg-rosebud {
  color: #A8026F !important;
}
.report-body .bg-rosebud {
  background-color: #A8026F !important;
}
.report-body .border-rosebud {
  border-color: #A8026F !important;
}
.report-body .fg-rosebud--025 {
  color: rgba(168, 2, 111, 0.025) !important;
}
.report-body .bg-rosebud--025 {
  background-color: rgba(168, 2, 111, 0.025) !important;
}
.report-body .border-rosebud--025 {
  border-color: rgba(168, 2, 111, 0.025) !important;
}
.report-body .fg-rosebud--05 {
  color: rgba(168, 2, 111, 0.05) !important;
}
.report-body .bg-rosebud--05 {
  background-color: rgba(168, 2, 111, 0.05) !important;
}
.report-body .border-rosebud--05 {
  border-color: rgba(168, 2, 111, 0.05) !important;
}
.report-body .fg-rosebud--1 {
  color: rgba(168, 2, 111, 0.1) !important;
}
.report-body .bg-rosebud--1 {
  background-color: rgba(168, 2, 111, 0.1) !important;
}
.report-body .border-rosebud--1 {
  border-color: rgba(168, 2, 111, 0.1) !important;
}
.report-body .fg-rosebud--2 {
  color: rgba(168, 2, 111, 0.2) !important;
}
.report-body .bg-rosebud--2 {
  background-color: rgba(168, 2, 111, 0.2) !important;
}
.report-body .border-rosebud--2 {
  border-color: rgba(168, 2, 111, 0.2) !important;
}
.report-body .fg-rosebud--3 {
  color: rgba(168, 2, 111, 0.3) !important;
}
.report-body .bg-rosebud--3 {
  background-color: rgba(168, 2, 111, 0.3) !important;
}
.report-body .border-rosebud--3 {
  border-color: rgba(168, 2, 111, 0.3) !important;
}
.report-body .fg-rosebud--4 {
  color: rgba(168, 2, 111, 0.4) !important;
}
.report-body .bg-rosebud--4 {
  background-color: rgba(168, 2, 111, 0.4) !important;
}
.report-body .border-rosebud--4 {
  border-color: rgba(168, 2, 111, 0.4) !important;
}
.report-body .fg-rosebud--5 {
  color: rgba(168, 2, 111, 0.5) !important;
}
.report-body .bg-rosebud--5 {
  background-color: rgba(168, 2, 111, 0.5) !important;
}
.report-body .border-rosebud--5 {
  border-color: rgba(168, 2, 111, 0.5) !important;
}
.report-body .fg-rosebud--6 {
  color: rgba(168, 2, 111, 0.6) !important;
}
.report-body .bg-rosebud--6 {
  background-color: rgba(168, 2, 111, 0.6) !important;
}
.report-body .border-rosebud--6 {
  border-color: rgba(168, 2, 111, 0.6) !important;
}
.report-body .fg-rosebud--7 {
  color: rgba(168, 2, 111, 0.7) !important;
}
.report-body .bg-rosebud--7 {
  background-color: rgba(168, 2, 111, 0.7) !important;
}
.report-body .border-rosebud--7 {
  border-color: rgba(168, 2, 111, 0.7) !important;
}
.report-body .fg-rosebud--8 {
  color: rgba(168, 2, 111, 0.8) !important;
}
.report-body .bg-rosebud--8 {
  background-color: rgba(168, 2, 111, 0.8) !important;
}
.report-body .border-rosebud--8 {
  border-color: rgba(168, 2, 111, 0.8) !important;
}
.report-body .fg-rosebud--9 {
  color: rgba(168, 2, 111, 0.9) !important;
}
.report-body .bg-rosebud--9 {
  background-color: rgba(168, 2, 111, 0.9) !important;
}
.report-body .border-rosebud--9 {
  border-color: rgba(168, 2, 111, 0.9) !important;
}
.report-body .fg-pierian {
  color: #01c3bf !important;
}
.report-body .bg-pierian {
  background-color: #01c3bf !important;
}
.report-body .border-pierian {
  border-color: #01c3bf !important;
}
.report-body .fg-pierian--025 {
  color: rgba(1, 195, 191, 0.025) !important;
}
.report-body .bg-pierian--025 {
  background-color: rgba(1, 195, 191, 0.025) !important;
}
.report-body .border-pierian--025 {
  border-color: rgba(1, 195, 191, 0.025) !important;
}
.report-body .fg-pierian--05 {
  color: rgba(1, 195, 191, 0.05) !important;
}
.report-body .bg-pierian--05 {
  background-color: rgba(1, 195, 191, 0.05) !important;
}
.report-body .border-pierian--05 {
  border-color: rgba(1, 195, 191, 0.05) !important;
}
.report-body .fg-pierian--1 {
  color: rgba(1, 195, 191, 0.1) !important;
}
.report-body .bg-pierian--1 {
  background-color: rgba(1, 195, 191, 0.1) !important;
}
.report-body .border-pierian--1 {
  border-color: rgba(1, 195, 191, 0.1) !important;
}
.report-body .fg-pierian--2 {
  color: rgba(1, 195, 191, 0.2) !important;
}
.report-body .bg-pierian--2 {
  background-color: rgba(1, 195, 191, 0.2) !important;
}
.report-body .border-pierian--2 {
  border-color: rgba(1, 195, 191, 0.2) !important;
}
.report-body .fg-pierian--3 {
  color: rgba(1, 195, 191, 0.3) !important;
}
.report-body .bg-pierian--3 {
  background-color: rgba(1, 195, 191, 0.3) !important;
}
.report-body .border-pierian--3 {
  border-color: rgba(1, 195, 191, 0.3) !important;
}
.report-body .fg-pierian--4 {
  color: rgba(1, 195, 191, 0.4) !important;
}
.report-body .bg-pierian--4 {
  background-color: rgba(1, 195, 191, 0.4) !important;
}
.report-body .border-pierian--4 {
  border-color: rgba(1, 195, 191, 0.4) !important;
}
.report-body .fg-pierian--5 {
  color: rgba(1, 195, 191, 0.5) !important;
}
.report-body .bg-pierian--5 {
  background-color: rgba(1, 195, 191, 0.5) !important;
}
.report-body .border-pierian--5 {
  border-color: rgba(1, 195, 191, 0.5) !important;
}
.report-body .fg-pierian--6 {
  color: rgba(1, 195, 191, 0.6) !important;
}
.report-body .bg-pierian--6 {
  background-color: rgba(1, 195, 191, 0.6) !important;
}
.report-body .border-pierian--6 {
  border-color: rgba(1, 195, 191, 0.6) !important;
}
.report-body .fg-pierian--7 {
  color: rgba(1, 195, 191, 0.7) !important;
}
.report-body .bg-pierian--7 {
  background-color: rgba(1, 195, 191, 0.7) !important;
}
.report-body .border-pierian--7 {
  border-color: rgba(1, 195, 191, 0.7) !important;
}
.report-body .fg-pierian--8 {
  color: rgba(1, 195, 191, 0.8) !important;
}
.report-body .bg-pierian--8 {
  background-color: rgba(1, 195, 191, 0.8) !important;
}
.report-body .border-pierian--8 {
  border-color: rgba(1, 195, 191, 0.8) !important;
}
.report-body .fg-pierian--9 {
  color: rgba(1, 195, 191, 0.9) !important;
}
.report-body .bg-pierian--9 {
  background-color: rgba(1, 195, 191, 0.9) !important;
}
.report-body .border-pierian--9 {
  border-color: rgba(1, 195, 191, 0.9) !important;
}
.report-body .fg-carrot {
  color: #fea645 !important;
}
.report-body .bg-carrot {
  background-color: #fea645 !important;
}
.report-body .border-carrot {
  border-color: #fea645 !important;
}
.report-body .fg-carrot--025 {
  color: rgba(254, 166, 69, 0.025) !important;
}
.report-body .bg-carrot--025 {
  background-color: rgba(254, 166, 69, 0.025) !important;
}
.report-body .border-carrot--025 {
  border-color: rgba(254, 166, 69, 0.025) !important;
}
.report-body .fg-carrot--05 {
  color: rgba(254, 166, 69, 0.05) !important;
}
.report-body .bg-carrot--05 {
  background-color: rgba(254, 166, 69, 0.05) !important;
}
.report-body .border-carrot--05 {
  border-color: rgba(254, 166, 69, 0.05) !important;
}
.report-body .fg-carrot--1 {
  color: rgba(254, 166, 69, 0.1) !important;
}
.report-body .bg-carrot--1 {
  background-color: rgba(254, 166, 69, 0.1) !important;
}
.report-body .border-carrot--1 {
  border-color: rgba(254, 166, 69, 0.1) !important;
}
.report-body .fg-carrot--2 {
  color: rgba(254, 166, 69, 0.2) !important;
}
.report-body .bg-carrot--2 {
  background-color: rgba(254, 166, 69, 0.2) !important;
}
.report-body .border-carrot--2 {
  border-color: rgba(254, 166, 69, 0.2) !important;
}
.report-body .fg-carrot--3 {
  color: rgba(254, 166, 69, 0.3) !important;
}
.report-body .bg-carrot--3 {
  background-color: rgba(254, 166, 69, 0.3) !important;
}
.report-body .border-carrot--3 {
  border-color: rgba(254, 166, 69, 0.3) !important;
}
.report-body .fg-carrot--4 {
  color: rgba(254, 166, 69, 0.4) !important;
}
.report-body .bg-carrot--4 {
  background-color: rgba(254, 166, 69, 0.4) !important;
}
.report-body .border-carrot--4 {
  border-color: rgba(254, 166, 69, 0.4) !important;
}
.report-body .fg-carrot--5 {
  color: rgba(254, 166, 69, 0.5) !important;
}
.report-body .bg-carrot--5 {
  background-color: rgba(254, 166, 69, 0.5) !important;
}
.report-body .border-carrot--5 {
  border-color: rgba(254, 166, 69, 0.5) !important;
}
.report-body .fg-carrot--6 {
  color: rgba(254, 166, 69, 0.6) !important;
}
.report-body .bg-carrot--6 {
  background-color: rgba(254, 166, 69, 0.6) !important;
}
.report-body .border-carrot--6 {
  border-color: rgba(254, 166, 69, 0.6) !important;
}
.report-body .fg-carrot--7 {
  color: rgba(254, 166, 69, 0.7) !important;
}
.report-body .bg-carrot--7 {
  background-color: rgba(254, 166, 69, 0.7) !important;
}
.report-body .border-carrot--7 {
  border-color: rgba(254, 166, 69, 0.7) !important;
}
.report-body .fg-carrot--8 {
  color: rgba(254, 166, 69, 0.8) !important;
}
.report-body .bg-carrot--8 {
  background-color: rgba(254, 166, 69, 0.8) !important;
}
.report-body .border-carrot--8 {
  border-color: rgba(254, 166, 69, 0.8) !important;
}
.report-body .fg-carrot--9 {
  color: rgba(254, 166, 69, 0.9) !important;
}
.report-body .bg-carrot--9 {
  background-color: rgba(254, 166, 69, 0.9) !important;
}
.report-body .border-carrot--9 {
  border-color: rgba(254, 166, 69, 0.9) !important;
}
.report-body .fg-sherpa {
  color: #014152 !important;
}
.report-body .bg-sherpa {
  background-color: #014152 !important;
}
.report-body .border-sherpa {
  border-color: #014152 !important;
}
.report-body .fg-sherpa--025 {
  color: rgba(1, 65, 82, 0.025) !important;
}
.report-body .bg-sherpa--025 {
  background-color: rgba(1, 65, 82, 0.025) !important;
}
.report-body .border-sherpa--025 {
  border-color: rgba(1, 65, 82, 0.025) !important;
}
.report-body .fg-sherpa--05 {
  color: rgba(1, 65, 82, 0.05) !important;
}
.report-body .bg-sherpa--05 {
  background-color: rgba(1, 65, 82, 0.05) !important;
}
.report-body .border-sherpa--05 {
  border-color: rgba(1, 65, 82, 0.05) !important;
}
.report-body .fg-sherpa--1 {
  color: rgba(1, 65, 82, 0.1) !important;
}
.report-body .bg-sherpa--1 {
  background-color: rgba(1, 65, 82, 0.1) !important;
}
.report-body .border-sherpa--1 {
  border-color: rgba(1, 65, 82, 0.1) !important;
}
.report-body .fg-sherpa--2 {
  color: rgba(1, 65, 82, 0.2) !important;
}
.report-body .bg-sherpa--2 {
  background-color: rgba(1, 65, 82, 0.2) !important;
}
.report-body .border-sherpa--2 {
  border-color: rgba(1, 65, 82, 0.2) !important;
}
.report-body .fg-sherpa--3 {
  color: rgba(1, 65, 82, 0.3) !important;
}
.report-body .bg-sherpa--3 {
  background-color: rgba(1, 65, 82, 0.3) !important;
}
.report-body .border-sherpa--3 {
  border-color: rgba(1, 65, 82, 0.3) !important;
}
.report-body .fg-sherpa--4 {
  color: rgba(1, 65, 82, 0.4) !important;
}
.report-body .bg-sherpa--4 {
  background-color: rgba(1, 65, 82, 0.4) !important;
}
.report-body .border-sherpa--4 {
  border-color: rgba(1, 65, 82, 0.4) !important;
}
.report-body .fg-sherpa--5 {
  color: rgba(1, 65, 82, 0.5) !important;
}
.report-body .bg-sherpa--5 {
  background-color: rgba(1, 65, 82, 0.5) !important;
}
.report-body .border-sherpa--5 {
  border-color: rgba(1, 65, 82, 0.5) !important;
}
.report-body .fg-sherpa--6 {
  color: rgba(1, 65, 82, 0.6) !important;
}
.report-body .bg-sherpa--6 {
  background-color: rgba(1, 65, 82, 0.6) !important;
}
.report-body .border-sherpa--6 {
  border-color: rgba(1, 65, 82, 0.6) !important;
}
.report-body .fg-sherpa--7 {
  color: rgba(1, 65, 82, 0.7) !important;
}
.report-body .bg-sherpa--7 {
  background-color: rgba(1, 65, 82, 0.7) !important;
}
.report-body .border-sherpa--7 {
  border-color: rgba(1, 65, 82, 0.7) !important;
}
.report-body .fg-sherpa--8 {
  color: rgba(1, 65, 82, 0.8) !important;
}
.report-body .bg-sherpa--8 {
  background-color: rgba(1, 65, 82, 0.8) !important;
}
.report-body .border-sherpa--8 {
  border-color: rgba(1, 65, 82, 0.8) !important;
}
.report-body .fg-sherpa--9 {
  color: rgba(1, 65, 82, 0.9) !important;
}
.report-body .bg-sherpa--9 {
  background-color: rgba(1, 65, 82, 0.9) !important;
}
.report-body .border-sherpa--9 {
  border-color: rgba(1, 65, 82, 0.9) !important;
}
.report-body .fg-nile {
  color: #23415C !important;
}
.report-body .bg-nile {
  background-color: #23415C !important;
}
.report-body .border-nile {
  border-color: #23415C !important;
}
.report-body .fg-nile--025 {
  color: rgba(35, 65, 92, 0.025) !important;
}
.report-body .bg-nile--025 {
  background-color: rgba(35, 65, 92, 0.025) !important;
}
.report-body .border-nile--025 {
  border-color: rgba(35, 65, 92, 0.025) !important;
}
.report-body .fg-nile--05 {
  color: rgba(35, 65, 92, 0.05) !important;
}
.report-body .bg-nile--05 {
  background-color: rgba(35, 65, 92, 0.05) !important;
}
.report-body .border-nile--05 {
  border-color: rgba(35, 65, 92, 0.05) !important;
}
.report-body .fg-nile--1 {
  color: rgba(35, 65, 92, 0.1) !important;
}
.report-body .bg-nile--1 {
  background-color: rgba(35, 65, 92, 0.1) !important;
}
.report-body .border-nile--1 {
  border-color: rgba(35, 65, 92, 0.1) !important;
}
.report-body .fg-nile--2 {
  color: rgba(35, 65, 92, 0.2) !important;
}
.report-body .bg-nile--2 {
  background-color: rgba(35, 65, 92, 0.2) !important;
}
.report-body .border-nile--2 {
  border-color: rgba(35, 65, 92, 0.2) !important;
}
.report-body .fg-nile--3 {
  color: rgba(35, 65, 92, 0.3) !important;
}
.report-body .bg-nile--3 {
  background-color: rgba(35, 65, 92, 0.3) !important;
}
.report-body .border-nile--3 {
  border-color: rgba(35, 65, 92, 0.3) !important;
}
.report-body .fg-nile--4 {
  color: rgba(35, 65, 92, 0.4) !important;
}
.report-body .bg-nile--4 {
  background-color: rgba(35, 65, 92, 0.4) !important;
}
.report-body .border-nile--4 {
  border-color: rgba(35, 65, 92, 0.4) !important;
}
.report-body .fg-nile--5 {
  color: rgba(35, 65, 92, 0.5) !important;
}
.report-body .bg-nile--5 {
  background-color: rgba(35, 65, 92, 0.5) !important;
}
.report-body .border-nile--5 {
  border-color: rgba(35, 65, 92, 0.5) !important;
}
.report-body .fg-nile--6 {
  color: rgba(35, 65, 92, 0.6) !important;
}
.report-body .bg-nile--6 {
  background-color: rgba(35, 65, 92, 0.6) !important;
}
.report-body .border-nile--6 {
  border-color: rgba(35, 65, 92, 0.6) !important;
}
.report-body .fg-nile--7 {
  color: rgba(35, 65, 92, 0.7) !important;
}
.report-body .bg-nile--7 {
  background-color: rgba(35, 65, 92, 0.7) !important;
}
.report-body .border-nile--7 {
  border-color: rgba(35, 65, 92, 0.7) !important;
}
.report-body .fg-nile--8 {
  color: rgba(35, 65, 92, 0.8) !important;
}
.report-body .bg-nile--8 {
  background-color: rgba(35, 65, 92, 0.8) !important;
}
.report-body .border-nile--8 {
  border-color: rgba(35, 65, 92, 0.8) !important;
}
.report-body .fg-nile--9 {
  color: rgba(35, 65, 92, 0.9) !important;
}
.report-body .bg-nile--9 {
  background-color: rgba(35, 65, 92, 0.9) !important;
}
.report-body .border-nile--9 {
  border-color: rgba(35, 65, 92, 0.9) !important;
}
.report-body .fg-data-12 {
  color: #94B44E !important;
}
.report-body .bg-data-12 {
  background-color: #94B44E !important;
}
.report-body .border-data-12 {
  border-color: #94B44E !important;
}
.report-body .fg-data-12--025 {
  color: rgba(148, 180, 78, 0.025) !important;
}
.report-body .bg-data-12--025 {
  background-color: rgba(148, 180, 78, 0.025) !important;
}
.report-body .border-data-12--025 {
  border-color: rgba(148, 180, 78, 0.025) !important;
}
.report-body .fg-data-12--05 {
  color: rgba(148, 180, 78, 0.05) !important;
}
.report-body .bg-data-12--05 {
  background-color: rgba(148, 180, 78, 0.05) !important;
}
.report-body .border-data-12--05 {
  border-color: rgba(148, 180, 78, 0.05) !important;
}
.report-body .fg-data-12--1 {
  color: rgba(148, 180, 78, 0.1) !important;
}
.report-body .bg-data-12--1 {
  background-color: rgba(148, 180, 78, 0.1) !important;
}
.report-body .border-data-12--1 {
  border-color: rgba(148, 180, 78, 0.1) !important;
}
.report-body .fg-data-12--2 {
  color: rgba(148, 180, 78, 0.2) !important;
}
.report-body .bg-data-12--2 {
  background-color: rgba(148, 180, 78, 0.2) !important;
}
.report-body .border-data-12--2 {
  border-color: rgba(148, 180, 78, 0.2) !important;
}
.report-body .fg-data-12--3 {
  color: rgba(148, 180, 78, 0.3) !important;
}
.report-body .bg-data-12--3 {
  background-color: rgba(148, 180, 78, 0.3) !important;
}
.report-body .border-data-12--3 {
  border-color: rgba(148, 180, 78, 0.3) !important;
}
.report-body .fg-data-12--4 {
  color: rgba(148, 180, 78, 0.4) !important;
}
.report-body .bg-data-12--4 {
  background-color: rgba(148, 180, 78, 0.4) !important;
}
.report-body .border-data-12--4 {
  border-color: rgba(148, 180, 78, 0.4) !important;
}
.report-body .fg-data-12--5 {
  color: rgba(148, 180, 78, 0.5) !important;
}
.report-body .bg-data-12--5 {
  background-color: rgba(148, 180, 78, 0.5) !important;
}
.report-body .border-data-12--5 {
  border-color: rgba(148, 180, 78, 0.5) !important;
}
.report-body .fg-data-12--6 {
  color: rgba(148, 180, 78, 0.6) !important;
}
.report-body .bg-data-12--6 {
  background-color: rgba(148, 180, 78, 0.6) !important;
}
.report-body .border-data-12--6 {
  border-color: rgba(148, 180, 78, 0.6) !important;
}
.report-body .fg-data-12--7 {
  color: rgba(148, 180, 78, 0.7) !important;
}
.report-body .bg-data-12--7 {
  background-color: rgba(148, 180, 78, 0.7) !important;
}
.report-body .border-data-12--7 {
  border-color: rgba(148, 180, 78, 0.7) !important;
}
.report-body .fg-data-12--8 {
  color: rgba(148, 180, 78, 0.8) !important;
}
.report-body .bg-data-12--8 {
  background-color: rgba(148, 180, 78, 0.8) !important;
}
.report-body .border-data-12--8 {
  border-color: rgba(148, 180, 78, 0.8) !important;
}
.report-body .fg-data-12--9 {
  color: rgba(148, 180, 78, 0.9) !important;
}
.report-body .bg-data-12--9 {
  background-color: rgba(148, 180, 78, 0.9) !important;
}
.report-body .border-data-12--9 {
  border-color: rgba(148, 180, 78, 0.9) !important;
}
.report-body .fg-data-11 {
  color: #94b44e !important;
}
.report-body .bg-data-11 {
  background-color: #94b44e !important;
}
.report-body .border-data-11 {
  border-color: #94b44e !important;
}
.report-body .fg-data-11--025 {
  color: rgba(148, 180, 78, 0.025) !important;
}
.report-body .bg-data-11--025 {
  background-color: rgba(148, 180, 78, 0.025) !important;
}
.report-body .border-data-11--025 {
  border-color: rgba(148, 180, 78, 0.025) !important;
}
.report-body .fg-data-11--05 {
  color: rgba(148, 180, 78, 0.05) !important;
}
.report-body .bg-data-11--05 {
  background-color: rgba(148, 180, 78, 0.05) !important;
}
.report-body .border-data-11--05 {
  border-color: rgba(148, 180, 78, 0.05) !important;
}
.report-body .fg-data-11--1 {
  color: rgba(148, 180, 78, 0.1) !important;
}
.report-body .bg-data-11--1 {
  background-color: rgba(148, 180, 78, 0.1) !important;
}
.report-body .border-data-11--1 {
  border-color: rgba(148, 180, 78, 0.1) !important;
}
.report-body .fg-data-11--2 {
  color: rgba(148, 180, 78, 0.2) !important;
}
.report-body .bg-data-11--2 {
  background-color: rgba(148, 180, 78, 0.2) !important;
}
.report-body .border-data-11--2 {
  border-color: rgba(148, 180, 78, 0.2) !important;
}
.report-body .fg-data-11--3 {
  color: rgba(148, 180, 78, 0.3) !important;
}
.report-body .bg-data-11--3 {
  background-color: rgba(148, 180, 78, 0.3) !important;
}
.report-body .border-data-11--3 {
  border-color: rgba(148, 180, 78, 0.3) !important;
}
.report-body .fg-data-11--4 {
  color: rgba(148, 180, 78, 0.4) !important;
}
.report-body .bg-data-11--4 {
  background-color: rgba(148, 180, 78, 0.4) !important;
}
.report-body .border-data-11--4 {
  border-color: rgba(148, 180, 78, 0.4) !important;
}
.report-body .fg-data-11--5 {
  color: rgba(148, 180, 78, 0.5) !important;
}
.report-body .bg-data-11--5 {
  background-color: rgba(148, 180, 78, 0.5) !important;
}
.report-body .border-data-11--5 {
  border-color: rgba(148, 180, 78, 0.5) !important;
}
.report-body .fg-data-11--6 {
  color: rgba(148, 180, 78, 0.6) !important;
}
.report-body .bg-data-11--6 {
  background-color: rgba(148, 180, 78, 0.6) !important;
}
.report-body .border-data-11--6 {
  border-color: rgba(148, 180, 78, 0.6) !important;
}
.report-body .fg-data-11--7 {
  color: rgba(148, 180, 78, 0.7) !important;
}
.report-body .bg-data-11--7 {
  background-color: rgba(148, 180, 78, 0.7) !important;
}
.report-body .border-data-11--7 {
  border-color: rgba(148, 180, 78, 0.7) !important;
}
.report-body .fg-data-11--8 {
  color: rgba(148, 180, 78, 0.8) !important;
}
.report-body .bg-data-11--8 {
  background-color: rgba(148, 180, 78, 0.8) !important;
}
.report-body .border-data-11--8 {
  border-color: rgba(148, 180, 78, 0.8) !important;
}
.report-body .fg-data-11--9 {
  color: rgba(148, 180, 78, 0.9) !important;
}
.report-body .bg-data-11--9 {
  background-color: rgba(148, 180, 78, 0.9) !important;
}
.report-body .border-data-11--9 {
  border-color: rgba(148, 180, 78, 0.9) !important;
}
.report-body .fg-data-10 {
  color: #bba632 !important;
}
.report-body .bg-data-10 {
  background-color: #bba632 !important;
}
.report-body .border-data-10 {
  border-color: #bba632 !important;
}
.report-body .fg-data-10--025 {
  color: rgba(187, 166, 50, 0.025) !important;
}
.report-body .bg-data-10--025 {
  background-color: rgba(187, 166, 50, 0.025) !important;
}
.report-body .border-data-10--025 {
  border-color: rgba(187, 166, 50, 0.025) !important;
}
.report-body .fg-data-10--05 {
  color: rgba(187, 166, 50, 0.05) !important;
}
.report-body .bg-data-10--05 {
  background-color: rgba(187, 166, 50, 0.05) !important;
}
.report-body .border-data-10--05 {
  border-color: rgba(187, 166, 50, 0.05) !important;
}
.report-body .fg-data-10--1 {
  color: rgba(187, 166, 50, 0.1) !important;
}
.report-body .bg-data-10--1 {
  background-color: rgba(187, 166, 50, 0.1) !important;
}
.report-body .border-data-10--1 {
  border-color: rgba(187, 166, 50, 0.1) !important;
}
.report-body .fg-data-10--2 {
  color: rgba(187, 166, 50, 0.2) !important;
}
.report-body .bg-data-10--2 {
  background-color: rgba(187, 166, 50, 0.2) !important;
}
.report-body .border-data-10--2 {
  border-color: rgba(187, 166, 50, 0.2) !important;
}
.report-body .fg-data-10--3 {
  color: rgba(187, 166, 50, 0.3) !important;
}
.report-body .bg-data-10--3 {
  background-color: rgba(187, 166, 50, 0.3) !important;
}
.report-body .border-data-10--3 {
  border-color: rgba(187, 166, 50, 0.3) !important;
}
.report-body .fg-data-10--4 {
  color: rgba(187, 166, 50, 0.4) !important;
}
.report-body .bg-data-10--4 {
  background-color: rgba(187, 166, 50, 0.4) !important;
}
.report-body .border-data-10--4 {
  border-color: rgba(187, 166, 50, 0.4) !important;
}
.report-body .fg-data-10--5 {
  color: rgba(187, 166, 50, 0.5) !important;
}
.report-body .bg-data-10--5 {
  background-color: rgba(187, 166, 50, 0.5) !important;
}
.report-body .border-data-10--5 {
  border-color: rgba(187, 166, 50, 0.5) !important;
}
.report-body .fg-data-10--6 {
  color: rgba(187, 166, 50, 0.6) !important;
}
.report-body .bg-data-10--6 {
  background-color: rgba(187, 166, 50, 0.6) !important;
}
.report-body .border-data-10--6 {
  border-color: rgba(187, 166, 50, 0.6) !important;
}
.report-body .fg-data-10--7 {
  color: rgba(187, 166, 50, 0.7) !important;
}
.report-body .bg-data-10--7 {
  background-color: rgba(187, 166, 50, 0.7) !important;
}
.report-body .border-data-10--7 {
  border-color: rgba(187, 166, 50, 0.7) !important;
}
.report-body .fg-data-10--8 {
  color: rgba(187, 166, 50, 0.8) !important;
}
.report-body .bg-data-10--8 {
  background-color: rgba(187, 166, 50, 0.8) !important;
}
.report-body .border-data-10--8 {
  border-color: rgba(187, 166, 50, 0.8) !important;
}
.report-body .fg-data-10--9 {
  color: rgba(187, 166, 50, 0.9) !important;
}
.report-body .bg-data-10--9 {
  background-color: rgba(187, 166, 50, 0.9) !important;
}
.report-body .border-data-10--9 {
  border-color: rgba(187, 166, 50, 0.9) !important;
}
.report-body .fg-data-9 {
  color: #e09230 !important;
}
.report-body .bg-data-9 {
  background-color: #e09230 !important;
}
.report-body .border-data-9 {
  border-color: #e09230 !important;
}
.report-body .fg-data-9--025 {
  color: rgba(224, 146, 48, 0.025) !important;
}
.report-body .bg-data-9--025 {
  background-color: rgba(224, 146, 48, 0.025) !important;
}
.report-body .border-data-9--025 {
  border-color: rgba(224, 146, 48, 0.025) !important;
}
.report-body .fg-data-9--05 {
  color: rgba(224, 146, 48, 0.05) !important;
}
.report-body .bg-data-9--05 {
  background-color: rgba(224, 146, 48, 0.05) !important;
}
.report-body .border-data-9--05 {
  border-color: rgba(224, 146, 48, 0.05) !important;
}
.report-body .fg-data-9--1 {
  color: rgba(224, 146, 48, 0.1) !important;
}
.report-body .bg-data-9--1 {
  background-color: rgba(224, 146, 48, 0.1) !important;
}
.report-body .border-data-9--1 {
  border-color: rgba(224, 146, 48, 0.1) !important;
}
.report-body .fg-data-9--2 {
  color: rgba(224, 146, 48, 0.2) !important;
}
.report-body .bg-data-9--2 {
  background-color: rgba(224, 146, 48, 0.2) !important;
}
.report-body .border-data-9--2 {
  border-color: rgba(224, 146, 48, 0.2) !important;
}
.report-body .fg-data-9--3 {
  color: rgba(224, 146, 48, 0.3) !important;
}
.report-body .bg-data-9--3 {
  background-color: rgba(224, 146, 48, 0.3) !important;
}
.report-body .border-data-9--3 {
  border-color: rgba(224, 146, 48, 0.3) !important;
}
.report-body .fg-data-9--4 {
  color: rgba(224, 146, 48, 0.4) !important;
}
.report-body .bg-data-9--4 {
  background-color: rgba(224, 146, 48, 0.4) !important;
}
.report-body .border-data-9--4 {
  border-color: rgba(224, 146, 48, 0.4) !important;
}
.report-body .fg-data-9--5 {
  color: rgba(224, 146, 48, 0.5) !important;
}
.report-body .bg-data-9--5 {
  background-color: rgba(224, 146, 48, 0.5) !important;
}
.report-body .border-data-9--5 {
  border-color: rgba(224, 146, 48, 0.5) !important;
}
.report-body .fg-data-9--6 {
  color: rgba(224, 146, 48, 0.6) !important;
}
.report-body .bg-data-9--6 {
  background-color: rgba(224, 146, 48, 0.6) !important;
}
.report-body .border-data-9--6 {
  border-color: rgba(224, 146, 48, 0.6) !important;
}
.report-body .fg-data-9--7 {
  color: rgba(224, 146, 48, 0.7) !important;
}
.report-body .bg-data-9--7 {
  background-color: rgba(224, 146, 48, 0.7) !important;
}
.report-body .border-data-9--7 {
  border-color: rgba(224, 146, 48, 0.7) !important;
}
.report-body .fg-data-9--8 {
  color: rgba(224, 146, 48, 0.8) !important;
}
.report-body .bg-data-9--8 {
  background-color: rgba(224, 146, 48, 0.8) !important;
}
.report-body .border-data-9--8 {
  border-color: rgba(224, 146, 48, 0.8) !important;
}
.report-body .fg-data-9--9 {
  color: rgba(224, 146, 48, 0.9) !important;
}
.report-body .bg-data-9--9 {
  background-color: rgba(224, 146, 48, 0.9) !important;
}
.report-body .border-data-9--9 {
  border-color: rgba(224, 146, 48, 0.9) !important;
}
.report-body .fg-data-8 {
  color: #ff7849 !important;
}
.report-body .bg-data-8 {
  background-color: #ff7849 !important;
}
.report-body .border-data-8 {
  border-color: #ff7849 !important;
}
.report-body .fg-data-8--025 {
  color: rgba(255, 120, 73, 0.025) !important;
}
.report-body .bg-data-8--025 {
  background-color: rgba(255, 120, 73, 0.025) !important;
}
.report-body .border-data-8--025 {
  border-color: rgba(255, 120, 73, 0.025) !important;
}
.report-body .fg-data-8--05 {
  color: rgba(255, 120, 73, 0.05) !important;
}
.report-body .bg-data-8--05 {
  background-color: rgba(255, 120, 73, 0.05) !important;
}
.report-body .border-data-8--05 {
  border-color: rgba(255, 120, 73, 0.05) !important;
}
.report-body .fg-data-8--1 {
  color: rgba(255, 120, 73, 0.1) !important;
}
.report-body .bg-data-8--1 {
  background-color: rgba(255, 120, 73, 0.1) !important;
}
.report-body .border-data-8--1 {
  border-color: rgba(255, 120, 73, 0.1) !important;
}
.report-body .fg-data-8--2 {
  color: rgba(255, 120, 73, 0.2) !important;
}
.report-body .bg-data-8--2 {
  background-color: rgba(255, 120, 73, 0.2) !important;
}
.report-body .border-data-8--2 {
  border-color: rgba(255, 120, 73, 0.2) !important;
}
.report-body .fg-data-8--3 {
  color: rgba(255, 120, 73, 0.3) !important;
}
.report-body .bg-data-8--3 {
  background-color: rgba(255, 120, 73, 0.3) !important;
}
.report-body .border-data-8--3 {
  border-color: rgba(255, 120, 73, 0.3) !important;
}
.report-body .fg-data-8--4 {
  color: rgba(255, 120, 73, 0.4) !important;
}
.report-body .bg-data-8--4 {
  background-color: rgba(255, 120, 73, 0.4) !important;
}
.report-body .border-data-8--4 {
  border-color: rgba(255, 120, 73, 0.4) !important;
}
.report-body .fg-data-8--5 {
  color: rgba(255, 120, 73, 0.5) !important;
}
.report-body .bg-data-8--5 {
  background-color: rgba(255, 120, 73, 0.5) !important;
}
.report-body .border-data-8--5 {
  border-color: rgba(255, 120, 73, 0.5) !important;
}
.report-body .fg-data-8--6 {
  color: rgba(255, 120, 73, 0.6) !important;
}
.report-body .bg-data-8--6 {
  background-color: rgba(255, 120, 73, 0.6) !important;
}
.report-body .border-data-8--6 {
  border-color: rgba(255, 120, 73, 0.6) !important;
}
.report-body .fg-data-8--7 {
  color: rgba(255, 120, 73, 0.7) !important;
}
.report-body .bg-data-8--7 {
  background-color: rgba(255, 120, 73, 0.7) !important;
}
.report-body .border-data-8--7 {
  border-color: rgba(255, 120, 73, 0.7) !important;
}
.report-body .fg-data-8--8 {
  color: rgba(255, 120, 73, 0.8) !important;
}
.report-body .bg-data-8--8 {
  background-color: rgba(255, 120, 73, 0.8) !important;
}
.report-body .border-data-8--8 {
  border-color: rgba(255, 120, 73, 0.8) !important;
}
.report-body .fg-data-8--9 {
  color: rgba(255, 120, 73, 0.9) !important;
}
.report-body .bg-data-8--9 {
  background-color: rgba(255, 120, 73, 0.9) !important;
}
.report-body .border-data-8--9 {
  border-color: rgba(255, 120, 73, 0.9) !important;
}
.report-body .fg-data-7 {
  color: #F35E6D !important;
}
.report-body .bg-data-7 {
  background-color: #F35E6D !important;
}
.report-body .border-data-7 {
  border-color: #F35E6D !important;
}
.report-body .fg-data-7--025 {
  color: rgba(243, 94, 109, 0.025) !important;
}
.report-body .bg-data-7--025 {
  background-color: rgba(243, 94, 109, 0.025) !important;
}
.report-body .border-data-7--025 {
  border-color: rgba(243, 94, 109, 0.025) !important;
}
.report-body .fg-data-7--05 {
  color: rgba(243, 94, 109, 0.05) !important;
}
.report-body .bg-data-7--05 {
  background-color: rgba(243, 94, 109, 0.05) !important;
}
.report-body .border-data-7--05 {
  border-color: rgba(243, 94, 109, 0.05) !important;
}
.report-body .fg-data-7--1 {
  color: rgba(243, 94, 109, 0.1) !important;
}
.report-body .bg-data-7--1 {
  background-color: rgba(243, 94, 109, 0.1) !important;
}
.report-body .border-data-7--1 {
  border-color: rgba(243, 94, 109, 0.1) !important;
}
.report-body .fg-data-7--2 {
  color: rgba(243, 94, 109, 0.2) !important;
}
.report-body .bg-data-7--2 {
  background-color: rgba(243, 94, 109, 0.2) !important;
}
.report-body .border-data-7--2 {
  border-color: rgba(243, 94, 109, 0.2) !important;
}
.report-body .fg-data-7--3 {
  color: rgba(243, 94, 109, 0.3) !important;
}
.report-body .bg-data-7--3 {
  background-color: rgba(243, 94, 109, 0.3) !important;
}
.report-body .border-data-7--3 {
  border-color: rgba(243, 94, 109, 0.3) !important;
}
.report-body .fg-data-7--4 {
  color: rgba(243, 94, 109, 0.4) !important;
}
.report-body .bg-data-7--4 {
  background-color: rgba(243, 94, 109, 0.4) !important;
}
.report-body .border-data-7--4 {
  border-color: rgba(243, 94, 109, 0.4) !important;
}
.report-body .fg-data-7--5 {
  color: rgba(243, 94, 109, 0.5) !important;
}
.report-body .bg-data-7--5 {
  background-color: rgba(243, 94, 109, 0.5) !important;
}
.report-body .border-data-7--5 {
  border-color: rgba(243, 94, 109, 0.5) !important;
}
.report-body .fg-data-7--6 {
  color: rgba(243, 94, 109, 0.6) !important;
}
.report-body .bg-data-7--6 {
  background-color: rgba(243, 94, 109, 0.6) !important;
}
.report-body .border-data-7--6 {
  border-color: rgba(243, 94, 109, 0.6) !important;
}
.report-body .fg-data-7--7 {
  color: rgba(243, 94, 109, 0.7) !important;
}
.report-body .bg-data-7--7 {
  background-color: rgba(243, 94, 109, 0.7) !important;
}
.report-body .border-data-7--7 {
  border-color: rgba(243, 94, 109, 0.7) !important;
}
.report-body .fg-data-7--8 {
  color: rgba(243, 94, 109, 0.8) !important;
}
.report-body .bg-data-7--8 {
  background-color: rgba(243, 94, 109, 0.8) !important;
}
.report-body .border-data-7--8 {
  border-color: rgba(243, 94, 109, 0.8) !important;
}
.report-body .fg-data-7--9 {
  color: rgba(243, 94, 109, 0.9) !important;
}
.report-body .bg-data-7--9 {
  background-color: rgba(243, 94, 109, 0.9) !important;
}
.report-body .border-data-7--9 {
  border-color: rgba(243, 94, 109, 0.9) !important;
}
.report-body .fg-data-6 {
  color: #D35589 !important;
}
.report-body .bg-data-6 {
  background-color: #D35589 !important;
}
.report-body .border-data-6 {
  border-color: #D35589 !important;
}
.report-body .fg-data-6--025 {
  color: rgba(211, 85, 137, 0.025) !important;
}
.report-body .bg-data-6--025 {
  background-color: rgba(211, 85, 137, 0.025) !important;
}
.report-body .border-data-6--025 {
  border-color: rgba(211, 85, 137, 0.025) !important;
}
.report-body .fg-data-6--05 {
  color: rgba(211, 85, 137, 0.05) !important;
}
.report-body .bg-data-6--05 {
  background-color: rgba(211, 85, 137, 0.05) !important;
}
.report-body .border-data-6--05 {
  border-color: rgba(211, 85, 137, 0.05) !important;
}
.report-body .fg-data-6--1 {
  color: rgba(211, 85, 137, 0.1) !important;
}
.report-body .bg-data-6--1 {
  background-color: rgba(211, 85, 137, 0.1) !important;
}
.report-body .border-data-6--1 {
  border-color: rgba(211, 85, 137, 0.1) !important;
}
.report-body .fg-data-6--2 {
  color: rgba(211, 85, 137, 0.2) !important;
}
.report-body .bg-data-6--2 {
  background-color: rgba(211, 85, 137, 0.2) !important;
}
.report-body .border-data-6--2 {
  border-color: rgba(211, 85, 137, 0.2) !important;
}
.report-body .fg-data-6--3 {
  color: rgba(211, 85, 137, 0.3) !important;
}
.report-body .bg-data-6--3 {
  background-color: rgba(211, 85, 137, 0.3) !important;
}
.report-body .border-data-6--3 {
  border-color: rgba(211, 85, 137, 0.3) !important;
}
.report-body .fg-data-6--4 {
  color: rgba(211, 85, 137, 0.4) !important;
}
.report-body .bg-data-6--4 {
  background-color: rgba(211, 85, 137, 0.4) !important;
}
.report-body .border-data-6--4 {
  border-color: rgba(211, 85, 137, 0.4) !important;
}
.report-body .fg-data-6--5 {
  color: rgba(211, 85, 137, 0.5) !important;
}
.report-body .bg-data-6--5 {
  background-color: rgba(211, 85, 137, 0.5) !important;
}
.report-body .border-data-6--5 {
  border-color: rgba(211, 85, 137, 0.5) !important;
}
.report-body .fg-data-6--6 {
  color: rgba(211, 85, 137, 0.6) !important;
}
.report-body .bg-data-6--6 {
  background-color: rgba(211, 85, 137, 0.6) !important;
}
.report-body .border-data-6--6 {
  border-color: rgba(211, 85, 137, 0.6) !important;
}
.report-body .fg-data-6--7 {
  color: rgba(211, 85, 137, 0.7) !important;
}
.report-body .bg-data-6--7 {
  background-color: rgba(211, 85, 137, 0.7) !important;
}
.report-body .border-data-6--7 {
  border-color: rgba(211, 85, 137, 0.7) !important;
}
.report-body .fg-data-6--8 {
  color: rgba(211, 85, 137, 0.8) !important;
}
.report-body .bg-data-6--8 {
  background-color: rgba(211, 85, 137, 0.8) !important;
}
.report-body .border-data-6--8 {
  border-color: rgba(211, 85, 137, 0.8) !important;
}
.report-body .fg-data-6--9 {
  color: rgba(211, 85, 137, 0.9) !important;
}
.report-body .bg-data-6--9 {
  background-color: rgba(211, 85, 137, 0.9) !important;
}
.report-body .border-data-6--9 {
  border-color: rgba(211, 85, 137, 0.9) !important;
}
.report-body .fg-data-5 {
  color: #A65699 !important;
}
.report-body .bg-data-5 {
  background-color: #A65699 !important;
}
.report-body .border-data-5 {
  border-color: #A65699 !important;
}
.report-body .fg-data-5--025 {
  color: rgba(166, 86, 153, 0.025) !important;
}
.report-body .bg-data-5--025 {
  background-color: rgba(166, 86, 153, 0.025) !important;
}
.report-body .border-data-5--025 {
  border-color: rgba(166, 86, 153, 0.025) !important;
}
.report-body .fg-data-5--05 {
  color: rgba(166, 86, 153, 0.05) !important;
}
.report-body .bg-data-5--05 {
  background-color: rgba(166, 86, 153, 0.05) !important;
}
.report-body .border-data-5--05 {
  border-color: rgba(166, 86, 153, 0.05) !important;
}
.report-body .fg-data-5--1 {
  color: rgba(166, 86, 153, 0.1) !important;
}
.report-body .bg-data-5--1 {
  background-color: rgba(166, 86, 153, 0.1) !important;
}
.report-body .border-data-5--1 {
  border-color: rgba(166, 86, 153, 0.1) !important;
}
.report-body .fg-data-5--2 {
  color: rgba(166, 86, 153, 0.2) !important;
}
.report-body .bg-data-5--2 {
  background-color: rgba(166, 86, 153, 0.2) !important;
}
.report-body .border-data-5--2 {
  border-color: rgba(166, 86, 153, 0.2) !important;
}
.report-body .fg-data-5--3 {
  color: rgba(166, 86, 153, 0.3) !important;
}
.report-body .bg-data-5--3 {
  background-color: rgba(166, 86, 153, 0.3) !important;
}
.report-body .border-data-5--3 {
  border-color: rgba(166, 86, 153, 0.3) !important;
}
.report-body .fg-data-5--4 {
  color: rgba(166, 86, 153, 0.4) !important;
}
.report-body .bg-data-5--4 {
  background-color: rgba(166, 86, 153, 0.4) !important;
}
.report-body .border-data-5--4 {
  border-color: rgba(166, 86, 153, 0.4) !important;
}
.report-body .fg-data-5--5 {
  color: rgba(166, 86, 153, 0.5) !important;
}
.report-body .bg-data-5--5 {
  background-color: rgba(166, 86, 153, 0.5) !important;
}
.report-body .border-data-5--5 {
  border-color: rgba(166, 86, 153, 0.5) !important;
}
.report-body .fg-data-5--6 {
  color: rgba(166, 86, 153, 0.6) !important;
}
.report-body .bg-data-5--6 {
  background-color: rgba(166, 86, 153, 0.6) !important;
}
.report-body .border-data-5--6 {
  border-color: rgba(166, 86, 153, 0.6) !important;
}
.report-body .fg-data-5--7 {
  color: rgba(166, 86, 153, 0.7) !important;
}
.report-body .bg-data-5--7 {
  background-color: rgba(166, 86, 153, 0.7) !important;
}
.report-body .border-data-5--7 {
  border-color: rgba(166, 86, 153, 0.7) !important;
}
.report-body .fg-data-5--8 {
  color: rgba(166, 86, 153, 0.8) !important;
}
.report-body .bg-data-5--8 {
  background-color: rgba(166, 86, 153, 0.8) !important;
}
.report-body .border-data-5--8 {
  border-color: rgba(166, 86, 153, 0.8) !important;
}
.report-body .fg-data-5--9 {
  color: rgba(166, 86, 153, 0.9) !important;
}
.report-body .bg-data-5--9 {
  background-color: rgba(166, 86, 153, 0.9) !important;
}
.report-body .border-data-5--9 {
  border-color: rgba(166, 86, 153, 0.9) !important;
}
.report-body .fg-data-4 {
  color: #71589A !important;
}
.report-body .bg-data-4 {
  background-color: #71589A !important;
}
.report-body .border-data-4 {
  border-color: #71589A !important;
}
.report-body .fg-data-4--025 {
  color: rgba(113, 88, 154, 0.025) !important;
}
.report-body .bg-data-4--025 {
  background-color: rgba(113, 88, 154, 0.025) !important;
}
.report-body .border-data-4--025 {
  border-color: rgba(113, 88, 154, 0.025) !important;
}
.report-body .fg-data-4--05 {
  color: rgba(113, 88, 154, 0.05) !important;
}
.report-body .bg-data-4--05 {
  background-color: rgba(113, 88, 154, 0.05) !important;
}
.report-body .border-data-4--05 {
  border-color: rgba(113, 88, 154, 0.05) !important;
}
.report-body .fg-data-4--1 {
  color: rgba(113, 88, 154, 0.1) !important;
}
.report-body .bg-data-4--1 {
  background-color: rgba(113, 88, 154, 0.1) !important;
}
.report-body .border-data-4--1 {
  border-color: rgba(113, 88, 154, 0.1) !important;
}
.report-body .fg-data-4--2 {
  color: rgba(113, 88, 154, 0.2) !important;
}
.report-body .bg-data-4--2 {
  background-color: rgba(113, 88, 154, 0.2) !important;
}
.report-body .border-data-4--2 {
  border-color: rgba(113, 88, 154, 0.2) !important;
}
.report-body .fg-data-4--3 {
  color: rgba(113, 88, 154, 0.3) !important;
}
.report-body .bg-data-4--3 {
  background-color: rgba(113, 88, 154, 0.3) !important;
}
.report-body .border-data-4--3 {
  border-color: rgba(113, 88, 154, 0.3) !important;
}
.report-body .fg-data-4--4 {
  color: rgba(113, 88, 154, 0.4) !important;
}
.report-body .bg-data-4--4 {
  background-color: rgba(113, 88, 154, 0.4) !important;
}
.report-body .border-data-4--4 {
  border-color: rgba(113, 88, 154, 0.4) !important;
}
.report-body .fg-data-4--5 {
  color: rgba(113, 88, 154, 0.5) !important;
}
.report-body .bg-data-4--5 {
  background-color: rgba(113, 88, 154, 0.5) !important;
}
.report-body .border-data-4--5 {
  border-color: rgba(113, 88, 154, 0.5) !important;
}
.report-body .fg-data-4--6 {
  color: rgba(113, 88, 154, 0.6) !important;
}
.report-body .bg-data-4--6 {
  background-color: rgba(113, 88, 154, 0.6) !important;
}
.report-body .border-data-4--6 {
  border-color: rgba(113, 88, 154, 0.6) !important;
}
.report-body .fg-data-4--7 {
  color: rgba(113, 88, 154, 0.7) !important;
}
.report-body .bg-data-4--7 {
  background-color: rgba(113, 88, 154, 0.7) !important;
}
.report-body .border-data-4--7 {
  border-color: rgba(113, 88, 154, 0.7) !important;
}
.report-body .fg-data-4--8 {
  color: rgba(113, 88, 154, 0.8) !important;
}
.report-body .bg-data-4--8 {
  background-color: rgba(113, 88, 154, 0.8) !important;
}
.report-body .border-data-4--8 {
  border-color: rgba(113, 88, 154, 0.8) !important;
}
.report-body .fg-data-4--9 {
  color: rgba(113, 88, 154, 0.9) !important;
}
.report-body .bg-data-4--9 {
  background-color: rgba(113, 88, 154, 0.9) !important;
}
.report-body .border-data-4--9 {
  border-color: rgba(113, 88, 154, 0.9) !important;
}
.report-body .fg-data-3 {
  color: #3D558B !important;
}
.report-body .bg-data-3 {
  background-color: #3D558B !important;
}
.report-body .border-data-3 {
  border-color: #3D558B !important;
}
.report-body .fg-data-3--025 {
  color: rgba(61, 85, 139, 0.025) !important;
}
.report-body .bg-data-3--025 {
  background-color: rgba(61, 85, 139, 0.025) !important;
}
.report-body .border-data-3--025 {
  border-color: rgba(61, 85, 139, 0.025) !important;
}
.report-body .fg-data-3--05 {
  color: rgba(61, 85, 139, 0.05) !important;
}
.report-body .bg-data-3--05 {
  background-color: rgba(61, 85, 139, 0.05) !important;
}
.report-body .border-data-3--05 {
  border-color: rgba(61, 85, 139, 0.05) !important;
}
.report-body .fg-data-3--1 {
  color: rgba(61, 85, 139, 0.1) !important;
}
.report-body .bg-data-3--1 {
  background-color: rgba(61, 85, 139, 0.1) !important;
}
.report-body .border-data-3--1 {
  border-color: rgba(61, 85, 139, 0.1) !important;
}
.report-body .fg-data-3--2 {
  color: rgba(61, 85, 139, 0.2) !important;
}
.report-body .bg-data-3--2 {
  background-color: rgba(61, 85, 139, 0.2) !important;
}
.report-body .border-data-3--2 {
  border-color: rgba(61, 85, 139, 0.2) !important;
}
.report-body .fg-data-3--3 {
  color: rgba(61, 85, 139, 0.3) !important;
}
.report-body .bg-data-3--3 {
  background-color: rgba(61, 85, 139, 0.3) !important;
}
.report-body .border-data-3--3 {
  border-color: rgba(61, 85, 139, 0.3) !important;
}
.report-body .fg-data-3--4 {
  color: rgba(61, 85, 139, 0.4) !important;
}
.report-body .bg-data-3--4 {
  background-color: rgba(61, 85, 139, 0.4) !important;
}
.report-body .border-data-3--4 {
  border-color: rgba(61, 85, 139, 0.4) !important;
}
.report-body .fg-data-3--5 {
  color: rgba(61, 85, 139, 0.5) !important;
}
.report-body .bg-data-3--5 {
  background-color: rgba(61, 85, 139, 0.5) !important;
}
.report-body .border-data-3--5 {
  border-color: rgba(61, 85, 139, 0.5) !important;
}
.report-body .fg-data-3--6 {
  color: rgba(61, 85, 139, 0.6) !important;
}
.report-body .bg-data-3--6 {
  background-color: rgba(61, 85, 139, 0.6) !important;
}
.report-body .border-data-3--6 {
  border-color: rgba(61, 85, 139, 0.6) !important;
}
.report-body .fg-data-3--7 {
  color: rgba(61, 85, 139, 0.7) !important;
}
.report-body .bg-data-3--7 {
  background-color: rgba(61, 85, 139, 0.7) !important;
}
.report-body .border-data-3--7 {
  border-color: rgba(61, 85, 139, 0.7) !important;
}
.report-body .fg-data-3--8 {
  color: rgba(61, 85, 139, 0.8) !important;
}
.report-body .bg-data-3--8 {
  background-color: rgba(61, 85, 139, 0.8) !important;
}
.report-body .border-data-3--8 {
  border-color: rgba(61, 85, 139, 0.8) !important;
}
.report-body .fg-data-3--9 {
  color: rgba(61, 85, 139, 0.9) !important;
}
.report-body .bg-data-3--9 {
  background-color: rgba(61, 85, 139, 0.9) !important;
}
.report-body .border-data-3--9 {
  border-color: rgba(61, 85, 139, 0.9) !important;
}
.report-body .fg-data-2 {
  color: #0D4D70 !important;
}
.report-body .bg-data-2 {
  background-color: #0D4D70 !important;
}
.report-body .border-data-2 {
  border-color: #0D4D70 !important;
}
.report-body .fg-data-2--025 {
  color: rgba(13, 77, 112, 0.025) !important;
}
.report-body .bg-data-2--025 {
  background-color: rgba(13, 77, 112, 0.025) !important;
}
.report-body .border-data-2--025 {
  border-color: rgba(13, 77, 112, 0.025) !important;
}
.report-body .fg-data-2--05 {
  color: rgba(13, 77, 112, 0.05) !important;
}
.report-body .bg-data-2--05 {
  background-color: rgba(13, 77, 112, 0.05) !important;
}
.report-body .border-data-2--05 {
  border-color: rgba(13, 77, 112, 0.05) !important;
}
.report-body .fg-data-2--1 {
  color: rgba(13, 77, 112, 0.1) !important;
}
.report-body .bg-data-2--1 {
  background-color: rgba(13, 77, 112, 0.1) !important;
}
.report-body .border-data-2--1 {
  border-color: rgba(13, 77, 112, 0.1) !important;
}
.report-body .fg-data-2--2 {
  color: rgba(13, 77, 112, 0.2) !important;
}
.report-body .bg-data-2--2 {
  background-color: rgba(13, 77, 112, 0.2) !important;
}
.report-body .border-data-2--2 {
  border-color: rgba(13, 77, 112, 0.2) !important;
}
.report-body .fg-data-2--3 {
  color: rgba(13, 77, 112, 0.3) !important;
}
.report-body .bg-data-2--3 {
  background-color: rgba(13, 77, 112, 0.3) !important;
}
.report-body .border-data-2--3 {
  border-color: rgba(13, 77, 112, 0.3) !important;
}
.report-body .fg-data-2--4 {
  color: rgba(13, 77, 112, 0.4) !important;
}
.report-body .bg-data-2--4 {
  background-color: rgba(13, 77, 112, 0.4) !important;
}
.report-body .border-data-2--4 {
  border-color: rgba(13, 77, 112, 0.4) !important;
}
.report-body .fg-data-2--5 {
  color: rgba(13, 77, 112, 0.5) !important;
}
.report-body .bg-data-2--5 {
  background-color: rgba(13, 77, 112, 0.5) !important;
}
.report-body .border-data-2--5 {
  border-color: rgba(13, 77, 112, 0.5) !important;
}
.report-body .fg-data-2--6 {
  color: rgba(13, 77, 112, 0.6) !important;
}
.report-body .bg-data-2--6 {
  background-color: rgba(13, 77, 112, 0.6) !important;
}
.report-body .border-data-2--6 {
  border-color: rgba(13, 77, 112, 0.6) !important;
}
.report-body .fg-data-2--7 {
  color: rgba(13, 77, 112, 0.7) !important;
}
.report-body .bg-data-2--7 {
  background-color: rgba(13, 77, 112, 0.7) !important;
}
.report-body .border-data-2--7 {
  border-color: rgba(13, 77, 112, 0.7) !important;
}
.report-body .fg-data-2--8 {
  color: rgba(13, 77, 112, 0.8) !important;
}
.report-body .bg-data-2--8 {
  background-color: rgba(13, 77, 112, 0.8) !important;
}
.report-body .border-data-2--8 {
  border-color: rgba(13, 77, 112, 0.8) !important;
}
.report-body .fg-data-2--9 {
  color: rgba(13, 77, 112, 0.9) !important;
}
.report-body .bg-data-2--9 {
  background-color: rgba(13, 77, 112, 0.9) !important;
}
.report-body .border-data-2--9 {
  border-color: rgba(13, 77, 112, 0.9) !important;
}
.report-body .fg-data-1 {
  color: #09384F !important;
}
.report-body .bg-data-1 {
  background-color: #09384F !important;
}
.report-body .border-data-1 {
  border-color: #09384F !important;
}
.report-body .fg-data-1--025 {
  color: rgba(9, 56, 79, 0.025) !important;
}
.report-body .bg-data-1--025 {
  background-color: rgba(9, 56, 79, 0.025) !important;
}
.report-body .border-data-1--025 {
  border-color: rgba(9, 56, 79, 0.025) !important;
}
.report-body .fg-data-1--05 {
  color: rgba(9, 56, 79, 0.05) !important;
}
.report-body .bg-data-1--05 {
  background-color: rgba(9, 56, 79, 0.05) !important;
}
.report-body .border-data-1--05 {
  border-color: rgba(9, 56, 79, 0.05) !important;
}
.report-body .fg-data-1--1 {
  color: rgba(9, 56, 79, 0.1) !important;
}
.report-body .bg-data-1--1 {
  background-color: rgba(9, 56, 79, 0.1) !important;
}
.report-body .border-data-1--1 {
  border-color: rgba(9, 56, 79, 0.1) !important;
}
.report-body .fg-data-1--2 {
  color: rgba(9, 56, 79, 0.2) !important;
}
.report-body .bg-data-1--2 {
  background-color: rgba(9, 56, 79, 0.2) !important;
}
.report-body .border-data-1--2 {
  border-color: rgba(9, 56, 79, 0.2) !important;
}
.report-body .fg-data-1--3 {
  color: rgba(9, 56, 79, 0.3) !important;
}
.report-body .bg-data-1--3 {
  background-color: rgba(9, 56, 79, 0.3) !important;
}
.report-body .border-data-1--3 {
  border-color: rgba(9, 56, 79, 0.3) !important;
}
.report-body .fg-data-1--4 {
  color: rgba(9, 56, 79, 0.4) !important;
}
.report-body .bg-data-1--4 {
  background-color: rgba(9, 56, 79, 0.4) !important;
}
.report-body .border-data-1--4 {
  border-color: rgba(9, 56, 79, 0.4) !important;
}
.report-body .fg-data-1--5 {
  color: rgba(9, 56, 79, 0.5) !important;
}
.report-body .bg-data-1--5 {
  background-color: rgba(9, 56, 79, 0.5) !important;
}
.report-body .border-data-1--5 {
  border-color: rgba(9, 56, 79, 0.5) !important;
}
.report-body .fg-data-1--6 {
  color: rgba(9, 56, 79, 0.6) !important;
}
.report-body .bg-data-1--6 {
  background-color: rgba(9, 56, 79, 0.6) !important;
}
.report-body .border-data-1--6 {
  border-color: rgba(9, 56, 79, 0.6) !important;
}
.report-body .fg-data-1--7 {
  color: rgba(9, 56, 79, 0.7) !important;
}
.report-body .bg-data-1--7 {
  background-color: rgba(9, 56, 79, 0.7) !important;
}
.report-body .border-data-1--7 {
  border-color: rgba(9, 56, 79, 0.7) !important;
}
.report-body .fg-data-1--8 {
  color: rgba(9, 56, 79, 0.8) !important;
}
.report-body .bg-data-1--8 {
  background-color: rgba(9, 56, 79, 0.8) !important;
}
.report-body .border-data-1--8 {
  border-color: rgba(9, 56, 79, 0.8) !important;
}
.report-body .fg-data-1--9 {
  color: rgba(9, 56, 79, 0.9) !important;
}
.report-body .bg-data-1--9 {
  background-color: rgba(9, 56, 79, 0.9) !important;
}
.report-body .border-data-1--9 {
  border-color: rgba(9, 56, 79, 0.9) !important;
}
.report-body .fg-gray-1 {
  color: #273444 !important;
}
.report-body .bg-gray-1 {
  background-color: #273444 !important;
}
.report-body .border-gray-1 {
  border-color: #273444 !important;
}
.report-body .fg-gray-1--025 {
  color: rgba(39, 52, 68, 0.025) !important;
}
.report-body .bg-gray-1--025 {
  background-color: rgba(39, 52, 68, 0.025) !important;
}
.report-body .border-gray-1--025 {
  border-color: rgba(39, 52, 68, 0.025) !important;
}
.report-body .fg-gray-1--05 {
  color: rgba(39, 52, 68, 0.05) !important;
}
.report-body .bg-gray-1--05 {
  background-color: rgba(39, 52, 68, 0.05) !important;
}
.report-body .border-gray-1--05 {
  border-color: rgba(39, 52, 68, 0.05) !important;
}
.report-body .fg-gray-1--1 {
  color: rgba(39, 52, 68, 0.1) !important;
}
.report-body .bg-gray-1--1 {
  background-color: rgba(39, 52, 68, 0.1) !important;
}
.report-body .border-gray-1--1 {
  border-color: rgba(39, 52, 68, 0.1) !important;
}
.report-body .fg-gray-1--2 {
  color: rgba(39, 52, 68, 0.2) !important;
}
.report-body .bg-gray-1--2 {
  background-color: rgba(39, 52, 68, 0.2) !important;
}
.report-body .border-gray-1--2 {
  border-color: rgba(39, 52, 68, 0.2) !important;
}
.report-body .fg-gray-1--3 {
  color: rgba(39, 52, 68, 0.3) !important;
}
.report-body .bg-gray-1--3 {
  background-color: rgba(39, 52, 68, 0.3) !important;
}
.report-body .border-gray-1--3 {
  border-color: rgba(39, 52, 68, 0.3) !important;
}
.report-body .fg-gray-1--4 {
  color: rgba(39, 52, 68, 0.4) !important;
}
.report-body .bg-gray-1--4 {
  background-color: rgba(39, 52, 68, 0.4) !important;
}
.report-body .border-gray-1--4 {
  border-color: rgba(39, 52, 68, 0.4) !important;
}
.report-body .fg-gray-1--5 {
  color: rgba(39, 52, 68, 0.5) !important;
}
.report-body .bg-gray-1--5 {
  background-color: rgba(39, 52, 68, 0.5) !important;
}
.report-body .border-gray-1--5 {
  border-color: rgba(39, 52, 68, 0.5) !important;
}
.report-body .fg-gray-1--6 {
  color: rgba(39, 52, 68, 0.6) !important;
}
.report-body .bg-gray-1--6 {
  background-color: rgba(39, 52, 68, 0.6) !important;
}
.report-body .border-gray-1--6 {
  border-color: rgba(39, 52, 68, 0.6) !important;
}
.report-body .fg-gray-1--7 {
  color: rgba(39, 52, 68, 0.7) !important;
}
.report-body .bg-gray-1--7 {
  background-color: rgba(39, 52, 68, 0.7) !important;
}
.report-body .border-gray-1--7 {
  border-color: rgba(39, 52, 68, 0.7) !important;
}
.report-body .fg-gray-1--8 {
  color: rgba(39, 52, 68, 0.8) !important;
}
.report-body .bg-gray-1--8 {
  background-color: rgba(39, 52, 68, 0.8) !important;
}
.report-body .border-gray-1--8 {
  border-color: rgba(39, 52, 68, 0.8) !important;
}
.report-body .fg-gray-1--9 {
  color: rgba(39, 52, 68, 0.9) !important;
}
.report-body .bg-gray-1--9 {
  background-color: rgba(39, 52, 68, 0.9) !important;
}
.report-body .border-gray-1--9 {
  border-color: rgba(39, 52, 68, 0.9) !important;
}
.report-body .fg-gray-2 {
  color: #3C4858 !important;
}
.report-body .bg-gray-2 {
  background-color: #3C4858 !important;
}
.report-body .border-gray-2 {
  border-color: #3C4858 !important;
}
.report-body .fg-gray-2--025 {
  color: rgba(60, 72, 88, 0.025) !important;
}
.report-body .bg-gray-2--025 {
  background-color: rgba(60, 72, 88, 0.025) !important;
}
.report-body .border-gray-2--025 {
  border-color: rgba(60, 72, 88, 0.025) !important;
}
.report-body .fg-gray-2--05 {
  color: rgba(60, 72, 88, 0.05) !important;
}
.report-body .bg-gray-2--05 {
  background-color: rgba(60, 72, 88, 0.05) !important;
}
.report-body .border-gray-2--05 {
  border-color: rgba(60, 72, 88, 0.05) !important;
}
.report-body .fg-gray-2--1 {
  color: rgba(60, 72, 88, 0.1) !important;
}
.report-body .bg-gray-2--1 {
  background-color: rgba(60, 72, 88, 0.1) !important;
}
.report-body .border-gray-2--1 {
  border-color: rgba(60, 72, 88, 0.1) !important;
}
.report-body .fg-gray-2--2 {
  color: rgba(60, 72, 88, 0.2) !important;
}
.report-body .bg-gray-2--2 {
  background-color: rgba(60, 72, 88, 0.2) !important;
}
.report-body .border-gray-2--2 {
  border-color: rgba(60, 72, 88, 0.2) !important;
}
.report-body .fg-gray-2--3 {
  color: rgba(60, 72, 88, 0.3) !important;
}
.report-body .bg-gray-2--3 {
  background-color: rgba(60, 72, 88, 0.3) !important;
}
.report-body .border-gray-2--3 {
  border-color: rgba(60, 72, 88, 0.3) !important;
}
.report-body .fg-gray-2--4 {
  color: rgba(60, 72, 88, 0.4) !important;
}
.report-body .bg-gray-2--4 {
  background-color: rgba(60, 72, 88, 0.4) !important;
}
.report-body .border-gray-2--4 {
  border-color: rgba(60, 72, 88, 0.4) !important;
}
.report-body .fg-gray-2--5 {
  color: rgba(60, 72, 88, 0.5) !important;
}
.report-body .bg-gray-2--5 {
  background-color: rgba(60, 72, 88, 0.5) !important;
}
.report-body .border-gray-2--5 {
  border-color: rgba(60, 72, 88, 0.5) !important;
}
.report-body .fg-gray-2--6 {
  color: rgba(60, 72, 88, 0.6) !important;
}
.report-body .bg-gray-2--6 {
  background-color: rgba(60, 72, 88, 0.6) !important;
}
.report-body .border-gray-2--6 {
  border-color: rgba(60, 72, 88, 0.6) !important;
}
.report-body .fg-gray-2--7 {
  color: rgba(60, 72, 88, 0.7) !important;
}
.report-body .bg-gray-2--7 {
  background-color: rgba(60, 72, 88, 0.7) !important;
}
.report-body .border-gray-2--7 {
  border-color: rgba(60, 72, 88, 0.7) !important;
}
.report-body .fg-gray-2--8 {
  color: rgba(60, 72, 88, 0.8) !important;
}
.report-body .bg-gray-2--8 {
  background-color: rgba(60, 72, 88, 0.8) !important;
}
.report-body .border-gray-2--8 {
  border-color: rgba(60, 72, 88, 0.8) !important;
}
.report-body .fg-gray-2--9 {
  color: rgba(60, 72, 88, 0.9) !important;
}
.report-body .bg-gray-2--9 {
  background-color: rgba(60, 72, 88, 0.9) !important;
}
.report-body .border-gray-2--9 {
  border-color: rgba(60, 72, 88, 0.9) !important;
}
.report-body .fg-gray-3 {
  color: #8492A6 !important;
}
.report-body .bg-gray-3 {
  background-color: #8492A6 !important;
}
.report-body .border-gray-3 {
  border-color: #8492A6 !important;
}
.report-body .fg-gray-3--025 {
  color: rgba(132, 146, 166, 0.025) !important;
}
.report-body .bg-gray-3--025 {
  background-color: rgba(132, 146, 166, 0.025) !important;
}
.report-body .border-gray-3--025 {
  border-color: rgba(132, 146, 166, 0.025) !important;
}
.report-body .fg-gray-3--05 {
  color: rgba(132, 146, 166, 0.05) !important;
}
.report-body .bg-gray-3--05 {
  background-color: rgba(132, 146, 166, 0.05) !important;
}
.report-body .border-gray-3--05 {
  border-color: rgba(132, 146, 166, 0.05) !important;
}
.report-body .fg-gray-3--1 {
  color: rgba(132, 146, 166, 0.1) !important;
}
.report-body .bg-gray-3--1 {
  background-color: rgba(132, 146, 166, 0.1) !important;
}
.report-body .border-gray-3--1 {
  border-color: rgba(132, 146, 166, 0.1) !important;
}
.report-body .fg-gray-3--2 {
  color: rgba(132, 146, 166, 0.2) !important;
}
.report-body .bg-gray-3--2 {
  background-color: rgba(132, 146, 166, 0.2) !important;
}
.report-body .border-gray-3--2 {
  border-color: rgba(132, 146, 166, 0.2) !important;
}
.report-body .fg-gray-3--3 {
  color: rgba(132, 146, 166, 0.3) !important;
}
.report-body .bg-gray-3--3 {
  background-color: rgba(132, 146, 166, 0.3) !important;
}
.report-body .border-gray-3--3 {
  border-color: rgba(132, 146, 166, 0.3) !important;
}
.report-body .fg-gray-3--4 {
  color: rgba(132, 146, 166, 0.4) !important;
}
.report-body .bg-gray-3--4 {
  background-color: rgba(132, 146, 166, 0.4) !important;
}
.report-body .border-gray-3--4 {
  border-color: rgba(132, 146, 166, 0.4) !important;
}
.report-body .fg-gray-3--5 {
  color: rgba(132, 146, 166, 0.5) !important;
}
.report-body .bg-gray-3--5 {
  background-color: rgba(132, 146, 166, 0.5) !important;
}
.report-body .border-gray-3--5 {
  border-color: rgba(132, 146, 166, 0.5) !important;
}
.report-body .fg-gray-3--6 {
  color: rgba(132, 146, 166, 0.6) !important;
}
.report-body .bg-gray-3--6 {
  background-color: rgba(132, 146, 166, 0.6) !important;
}
.report-body .border-gray-3--6 {
  border-color: rgba(132, 146, 166, 0.6) !important;
}
.report-body .fg-gray-3--7 {
  color: rgba(132, 146, 166, 0.7) !important;
}
.report-body .bg-gray-3--7 {
  background-color: rgba(132, 146, 166, 0.7) !important;
}
.report-body .border-gray-3--7 {
  border-color: rgba(132, 146, 166, 0.7) !important;
}
.report-body .fg-gray-3--8 {
  color: rgba(132, 146, 166, 0.8) !important;
}
.report-body .bg-gray-3--8 {
  background-color: rgba(132, 146, 166, 0.8) !important;
}
.report-body .border-gray-3--8 {
  border-color: rgba(132, 146, 166, 0.8) !important;
}
.report-body .fg-gray-3--9 {
  color: rgba(132, 146, 166, 0.9) !important;
}
.report-body .bg-gray-3--9 {
  background-color: rgba(132, 146, 166, 0.9) !important;
}
.report-body .border-gray-3--9 {
  border-color: rgba(132, 146, 166, 0.9) !important;
}
.report-body .fg-gray-4 {
  color: #A2AFC0 !important;
}
.report-body .bg-gray-4 {
  background-color: #A2AFC0 !important;
}
.report-body .border-gray-4 {
  border-color: #A2AFC0 !important;
}
.report-body .fg-gray-4--025 {
  color: rgba(162, 175, 192, 0.025) !important;
}
.report-body .bg-gray-4--025 {
  background-color: rgba(162, 175, 192, 0.025) !important;
}
.report-body .border-gray-4--025 {
  border-color: rgba(162, 175, 192, 0.025) !important;
}
.report-body .fg-gray-4--05 {
  color: rgba(162, 175, 192, 0.05) !important;
}
.report-body .bg-gray-4--05 {
  background-color: rgba(162, 175, 192, 0.05) !important;
}
.report-body .border-gray-4--05 {
  border-color: rgba(162, 175, 192, 0.05) !important;
}
.report-body .fg-gray-4--1 {
  color: rgba(162, 175, 192, 0.1) !important;
}
.report-body .bg-gray-4--1 {
  background-color: rgba(162, 175, 192, 0.1) !important;
}
.report-body .border-gray-4--1 {
  border-color: rgba(162, 175, 192, 0.1) !important;
}
.report-body .fg-gray-4--2 {
  color: rgba(162, 175, 192, 0.2) !important;
}
.report-body .bg-gray-4--2 {
  background-color: rgba(162, 175, 192, 0.2) !important;
}
.report-body .border-gray-4--2 {
  border-color: rgba(162, 175, 192, 0.2) !important;
}
.report-body .fg-gray-4--3 {
  color: rgba(162, 175, 192, 0.3) !important;
}
.report-body .bg-gray-4--3 {
  background-color: rgba(162, 175, 192, 0.3) !important;
}
.report-body .border-gray-4--3 {
  border-color: rgba(162, 175, 192, 0.3) !important;
}
.report-body .fg-gray-4--4 {
  color: rgba(162, 175, 192, 0.4) !important;
}
.report-body .bg-gray-4--4 {
  background-color: rgba(162, 175, 192, 0.4) !important;
}
.report-body .border-gray-4--4 {
  border-color: rgba(162, 175, 192, 0.4) !important;
}
.report-body .fg-gray-4--5 {
  color: rgba(162, 175, 192, 0.5) !important;
}
.report-body .bg-gray-4--5 {
  background-color: rgba(162, 175, 192, 0.5) !important;
}
.report-body .border-gray-4--5 {
  border-color: rgba(162, 175, 192, 0.5) !important;
}
.report-body .fg-gray-4--6 {
  color: rgba(162, 175, 192, 0.6) !important;
}
.report-body .bg-gray-4--6 {
  background-color: rgba(162, 175, 192, 0.6) !important;
}
.report-body .border-gray-4--6 {
  border-color: rgba(162, 175, 192, 0.6) !important;
}
.report-body .fg-gray-4--7 {
  color: rgba(162, 175, 192, 0.7) !important;
}
.report-body .bg-gray-4--7 {
  background-color: rgba(162, 175, 192, 0.7) !important;
}
.report-body .border-gray-4--7 {
  border-color: rgba(162, 175, 192, 0.7) !important;
}
.report-body .fg-gray-4--8 {
  color: rgba(162, 175, 192, 0.8) !important;
}
.report-body .bg-gray-4--8 {
  background-color: rgba(162, 175, 192, 0.8) !important;
}
.report-body .border-gray-4--8 {
  border-color: rgba(162, 175, 192, 0.8) !important;
}
.report-body .fg-gray-4--9 {
  color: rgba(162, 175, 192, 0.9) !important;
}
.report-body .bg-gray-4--9 {
  background-color: rgba(162, 175, 192, 0.9) !important;
}
.report-body .border-gray-4--9 {
  border-color: rgba(162, 175, 192, 0.9) !important;
}
.report-body .fg-gray-5 {
  color: #C0CCDA !important;
}
.report-body .bg-gray-5 {
  background-color: #C0CCDA !important;
}
.report-body .border-gray-5 {
  border-color: #C0CCDA !important;
}
.report-body .fg-gray-5--025 {
  color: rgba(192, 204, 218, 0.025) !important;
}
.report-body .bg-gray-5--025 {
  background-color: rgba(192, 204, 218, 0.025) !important;
}
.report-body .border-gray-5--025 {
  border-color: rgba(192, 204, 218, 0.025) !important;
}
.report-body .fg-gray-5--05 {
  color: rgba(192, 204, 218, 0.05) !important;
}
.report-body .bg-gray-5--05 {
  background-color: rgba(192, 204, 218, 0.05) !important;
}
.report-body .border-gray-5--05 {
  border-color: rgba(192, 204, 218, 0.05) !important;
}
.report-body .fg-gray-5--1 {
  color: rgba(192, 204, 218, 0.1) !important;
}
.report-body .bg-gray-5--1 {
  background-color: rgba(192, 204, 218, 0.1) !important;
}
.report-body .border-gray-5--1 {
  border-color: rgba(192, 204, 218, 0.1) !important;
}
.report-body .fg-gray-5--2 {
  color: rgba(192, 204, 218, 0.2) !important;
}
.report-body .bg-gray-5--2 {
  background-color: rgba(192, 204, 218, 0.2) !important;
}
.report-body .border-gray-5--2 {
  border-color: rgba(192, 204, 218, 0.2) !important;
}
.report-body .fg-gray-5--3 {
  color: rgba(192, 204, 218, 0.3) !important;
}
.report-body .bg-gray-5--3 {
  background-color: rgba(192, 204, 218, 0.3) !important;
}
.report-body .border-gray-5--3 {
  border-color: rgba(192, 204, 218, 0.3) !important;
}
.report-body .fg-gray-5--4 {
  color: rgba(192, 204, 218, 0.4) !important;
}
.report-body .bg-gray-5--4 {
  background-color: rgba(192, 204, 218, 0.4) !important;
}
.report-body .border-gray-5--4 {
  border-color: rgba(192, 204, 218, 0.4) !important;
}
.report-body .fg-gray-5--5 {
  color: rgba(192, 204, 218, 0.5) !important;
}
.report-body .bg-gray-5--5 {
  background-color: rgba(192, 204, 218, 0.5) !important;
}
.report-body .border-gray-5--5 {
  border-color: rgba(192, 204, 218, 0.5) !important;
}
.report-body .fg-gray-5--6 {
  color: rgba(192, 204, 218, 0.6) !important;
}
.report-body .bg-gray-5--6 {
  background-color: rgba(192, 204, 218, 0.6) !important;
}
.report-body .border-gray-5--6 {
  border-color: rgba(192, 204, 218, 0.6) !important;
}
.report-body .fg-gray-5--7 {
  color: rgba(192, 204, 218, 0.7) !important;
}
.report-body .bg-gray-5--7 {
  background-color: rgba(192, 204, 218, 0.7) !important;
}
.report-body .border-gray-5--7 {
  border-color: rgba(192, 204, 218, 0.7) !important;
}
.report-body .fg-gray-5--8 {
  color: rgba(192, 204, 218, 0.8) !important;
}
.report-body .bg-gray-5--8 {
  background-color: rgba(192, 204, 218, 0.8) !important;
}
.report-body .border-gray-5--8 {
  border-color: rgba(192, 204, 218, 0.8) !important;
}
.report-body .fg-gray-5--9 {
  color: rgba(192, 204, 218, 0.9) !important;
}
.report-body .bg-gray-5--9 {
  background-color: rgba(192, 204, 218, 0.9) !important;
}
.report-body .border-gray-5--9 {
  border-color: rgba(192, 204, 218, 0.9) !important;
}
.report-body .fg-gray-6 {
  color: #D3DCE6 !important;
}
.report-body .bg-gray-6 {
  background-color: #D3DCE6 !important;
}
.report-body .border-gray-6 {
  border-color: #D3DCE6 !important;
}
.report-body .fg-gray-6--025 {
  color: rgba(211, 220, 230, 0.025) !important;
}
.report-body .bg-gray-6--025 {
  background-color: rgba(211, 220, 230, 0.025) !important;
}
.report-body .border-gray-6--025 {
  border-color: rgba(211, 220, 230, 0.025) !important;
}
.report-body .fg-gray-6--05 {
  color: rgba(211, 220, 230, 0.05) !important;
}
.report-body .bg-gray-6--05 {
  background-color: rgba(211, 220, 230, 0.05) !important;
}
.report-body .border-gray-6--05 {
  border-color: rgba(211, 220, 230, 0.05) !important;
}
.report-body .fg-gray-6--1 {
  color: rgba(211, 220, 230, 0.1) !important;
}
.report-body .bg-gray-6--1 {
  background-color: rgba(211, 220, 230, 0.1) !important;
}
.report-body .border-gray-6--1 {
  border-color: rgba(211, 220, 230, 0.1) !important;
}
.report-body .fg-gray-6--2 {
  color: rgba(211, 220, 230, 0.2) !important;
}
.report-body .bg-gray-6--2 {
  background-color: rgba(211, 220, 230, 0.2) !important;
}
.report-body .border-gray-6--2 {
  border-color: rgba(211, 220, 230, 0.2) !important;
}
.report-body .fg-gray-6--3 {
  color: rgba(211, 220, 230, 0.3) !important;
}
.report-body .bg-gray-6--3 {
  background-color: rgba(211, 220, 230, 0.3) !important;
}
.report-body .border-gray-6--3 {
  border-color: rgba(211, 220, 230, 0.3) !important;
}
.report-body .fg-gray-6--4 {
  color: rgba(211, 220, 230, 0.4) !important;
}
.report-body .bg-gray-6--4 {
  background-color: rgba(211, 220, 230, 0.4) !important;
}
.report-body .border-gray-6--4 {
  border-color: rgba(211, 220, 230, 0.4) !important;
}
.report-body .fg-gray-6--5 {
  color: rgba(211, 220, 230, 0.5) !important;
}
.report-body .bg-gray-6--5 {
  background-color: rgba(211, 220, 230, 0.5) !important;
}
.report-body .border-gray-6--5 {
  border-color: rgba(211, 220, 230, 0.5) !important;
}
.report-body .fg-gray-6--6 {
  color: rgba(211, 220, 230, 0.6) !important;
}
.report-body .bg-gray-6--6 {
  background-color: rgba(211, 220, 230, 0.6) !important;
}
.report-body .border-gray-6--6 {
  border-color: rgba(211, 220, 230, 0.6) !important;
}
.report-body .fg-gray-6--7 {
  color: rgba(211, 220, 230, 0.7) !important;
}
.report-body .bg-gray-6--7 {
  background-color: rgba(211, 220, 230, 0.7) !important;
}
.report-body .border-gray-6--7 {
  border-color: rgba(211, 220, 230, 0.7) !important;
}
.report-body .fg-gray-6--8 {
  color: rgba(211, 220, 230, 0.8) !important;
}
.report-body .bg-gray-6--8 {
  background-color: rgba(211, 220, 230, 0.8) !important;
}
.report-body .border-gray-6--8 {
  border-color: rgba(211, 220, 230, 0.8) !important;
}
.report-body .fg-gray-6--9 {
  color: rgba(211, 220, 230, 0.9) !important;
}
.report-body .bg-gray-6--9 {
  background-color: rgba(211, 220, 230, 0.9) !important;
}
.report-body .border-gray-6--9 {
  border-color: rgba(211, 220, 230, 0.9) !important;
}
.report-body .fg-gray-7 {
  color: #E0E6ED !important;
}
.report-body .bg-gray-7 {
  background-color: #E0E6ED !important;
}
.report-body .border-gray-7 {
  border-color: #E0E6ED !important;
}
.report-body .fg-gray-7--025 {
  color: rgba(224, 230, 237, 0.025) !important;
}
.report-body .bg-gray-7--025 {
  background-color: rgba(224, 230, 237, 0.025) !important;
}
.report-body .border-gray-7--025 {
  border-color: rgba(224, 230, 237, 0.025) !important;
}
.report-body .fg-gray-7--05 {
  color: rgba(224, 230, 237, 0.05) !important;
}
.report-body .bg-gray-7--05 {
  background-color: rgba(224, 230, 237, 0.05) !important;
}
.report-body .border-gray-7--05 {
  border-color: rgba(224, 230, 237, 0.05) !important;
}
.report-body .fg-gray-7--1 {
  color: rgba(224, 230, 237, 0.1) !important;
}
.report-body .bg-gray-7--1 {
  background-color: rgba(224, 230, 237, 0.1) !important;
}
.report-body .border-gray-7--1 {
  border-color: rgba(224, 230, 237, 0.1) !important;
}
.report-body .fg-gray-7--2 {
  color: rgba(224, 230, 237, 0.2) !important;
}
.report-body .bg-gray-7--2 {
  background-color: rgba(224, 230, 237, 0.2) !important;
}
.report-body .border-gray-7--2 {
  border-color: rgba(224, 230, 237, 0.2) !important;
}
.report-body .fg-gray-7--3 {
  color: rgba(224, 230, 237, 0.3) !important;
}
.report-body .bg-gray-7--3 {
  background-color: rgba(224, 230, 237, 0.3) !important;
}
.report-body .border-gray-7--3 {
  border-color: rgba(224, 230, 237, 0.3) !important;
}
.report-body .fg-gray-7--4 {
  color: rgba(224, 230, 237, 0.4) !important;
}
.report-body .bg-gray-7--4 {
  background-color: rgba(224, 230, 237, 0.4) !important;
}
.report-body .border-gray-7--4 {
  border-color: rgba(224, 230, 237, 0.4) !important;
}
.report-body .fg-gray-7--5 {
  color: rgba(224, 230, 237, 0.5) !important;
}
.report-body .bg-gray-7--5 {
  background-color: rgba(224, 230, 237, 0.5) !important;
}
.report-body .border-gray-7--5 {
  border-color: rgba(224, 230, 237, 0.5) !important;
}
.report-body .fg-gray-7--6 {
  color: rgba(224, 230, 237, 0.6) !important;
}
.report-body .bg-gray-7--6 {
  background-color: rgba(224, 230, 237, 0.6) !important;
}
.report-body .border-gray-7--6 {
  border-color: rgba(224, 230, 237, 0.6) !important;
}
.report-body .fg-gray-7--7 {
  color: rgba(224, 230, 237, 0.7) !important;
}
.report-body .bg-gray-7--7 {
  background-color: rgba(224, 230, 237, 0.7) !important;
}
.report-body .border-gray-7--7 {
  border-color: rgba(224, 230, 237, 0.7) !important;
}
.report-body .fg-gray-7--8 {
  color: rgba(224, 230, 237, 0.8) !important;
}
.report-body .bg-gray-7--8 {
  background-color: rgba(224, 230, 237, 0.8) !important;
}
.report-body .border-gray-7--8 {
  border-color: rgba(224, 230, 237, 0.8) !important;
}
.report-body .fg-gray-7--9 {
  color: rgba(224, 230, 237, 0.9) !important;
}
.report-body .bg-gray-7--9 {
  background-color: rgba(224, 230, 237, 0.9) !important;
}
.report-body .border-gray-7--9 {
  border-color: rgba(224, 230, 237, 0.9) !important;
}
.report-body .fg-gray-8 {
  color: #E5E9F2 !important;
}
.report-body .bg-gray-8 {
  background-color: #E5E9F2 !important;
}
.report-body .border-gray-8 {
  border-color: #E5E9F2 !important;
}
.report-body .fg-gray-8--025 {
  color: rgba(229, 233, 242, 0.025) !important;
}
.report-body .bg-gray-8--025 {
  background-color: rgba(229, 233, 242, 0.025) !important;
}
.report-body .border-gray-8--025 {
  border-color: rgba(229, 233, 242, 0.025) !important;
}
.report-body .fg-gray-8--05 {
  color: rgba(229, 233, 242, 0.05) !important;
}
.report-body .bg-gray-8--05 {
  background-color: rgba(229, 233, 242, 0.05) !important;
}
.report-body .border-gray-8--05 {
  border-color: rgba(229, 233, 242, 0.05) !important;
}
.report-body .fg-gray-8--1 {
  color: rgba(229, 233, 242, 0.1) !important;
}
.report-body .bg-gray-8--1 {
  background-color: rgba(229, 233, 242, 0.1) !important;
}
.report-body .border-gray-8--1 {
  border-color: rgba(229, 233, 242, 0.1) !important;
}
.report-body .fg-gray-8--2 {
  color: rgba(229, 233, 242, 0.2) !important;
}
.report-body .bg-gray-8--2 {
  background-color: rgba(229, 233, 242, 0.2) !important;
}
.report-body .border-gray-8--2 {
  border-color: rgba(229, 233, 242, 0.2) !important;
}
.report-body .fg-gray-8--3 {
  color: rgba(229, 233, 242, 0.3) !important;
}
.report-body .bg-gray-8--3 {
  background-color: rgba(229, 233, 242, 0.3) !important;
}
.report-body .border-gray-8--3 {
  border-color: rgba(229, 233, 242, 0.3) !important;
}
.report-body .fg-gray-8--4 {
  color: rgba(229, 233, 242, 0.4) !important;
}
.report-body .bg-gray-8--4 {
  background-color: rgba(229, 233, 242, 0.4) !important;
}
.report-body .border-gray-8--4 {
  border-color: rgba(229, 233, 242, 0.4) !important;
}
.report-body .fg-gray-8--5 {
  color: rgba(229, 233, 242, 0.5) !important;
}
.report-body .bg-gray-8--5 {
  background-color: rgba(229, 233, 242, 0.5) !important;
}
.report-body .border-gray-8--5 {
  border-color: rgba(229, 233, 242, 0.5) !important;
}
.report-body .fg-gray-8--6 {
  color: rgba(229, 233, 242, 0.6) !important;
}
.report-body .bg-gray-8--6 {
  background-color: rgba(229, 233, 242, 0.6) !important;
}
.report-body .border-gray-8--6 {
  border-color: rgba(229, 233, 242, 0.6) !important;
}
.report-body .fg-gray-8--7 {
  color: rgba(229, 233, 242, 0.7) !important;
}
.report-body .bg-gray-8--7 {
  background-color: rgba(229, 233, 242, 0.7) !important;
}
.report-body .border-gray-8--7 {
  border-color: rgba(229, 233, 242, 0.7) !important;
}
.report-body .fg-gray-8--8 {
  color: rgba(229, 233, 242, 0.8) !important;
}
.report-body .bg-gray-8--8 {
  background-color: rgba(229, 233, 242, 0.8) !important;
}
.report-body .border-gray-8--8 {
  border-color: rgba(229, 233, 242, 0.8) !important;
}
.report-body .fg-gray-8--9 {
  color: rgba(229, 233, 242, 0.9) !important;
}
.report-body .bg-gray-8--9 {
  background-color: rgba(229, 233, 242, 0.9) !important;
}
.report-body .border-gray-8--9 {
  border-color: rgba(229, 233, 242, 0.9) !important;
}
.report-body .fg-gray-9 {
  color: #EFF2F7 !important;
}
.report-body .bg-gray-9 {
  background-color: #EFF2F7 !important;
}
.report-body .border-gray-9 {
  border-color: #EFF2F7 !important;
}
.report-body .fg-gray-9--025 {
  color: rgba(239, 242, 247, 0.025) !important;
}
.report-body .bg-gray-9--025 {
  background-color: rgba(239, 242, 247, 0.025) !important;
}
.report-body .border-gray-9--025 {
  border-color: rgba(239, 242, 247, 0.025) !important;
}
.report-body .fg-gray-9--05 {
  color: rgba(239, 242, 247, 0.05) !important;
}
.report-body .bg-gray-9--05 {
  background-color: rgba(239, 242, 247, 0.05) !important;
}
.report-body .border-gray-9--05 {
  border-color: rgba(239, 242, 247, 0.05) !important;
}
.report-body .fg-gray-9--1 {
  color: rgba(239, 242, 247, 0.1) !important;
}
.report-body .bg-gray-9--1 {
  background-color: rgba(239, 242, 247, 0.1) !important;
}
.report-body .border-gray-9--1 {
  border-color: rgba(239, 242, 247, 0.1) !important;
}
.report-body .fg-gray-9--2 {
  color: rgba(239, 242, 247, 0.2) !important;
}
.report-body .bg-gray-9--2 {
  background-color: rgba(239, 242, 247, 0.2) !important;
}
.report-body .border-gray-9--2 {
  border-color: rgba(239, 242, 247, 0.2) !important;
}
.report-body .fg-gray-9--3 {
  color: rgba(239, 242, 247, 0.3) !important;
}
.report-body .bg-gray-9--3 {
  background-color: rgba(239, 242, 247, 0.3) !important;
}
.report-body .border-gray-9--3 {
  border-color: rgba(239, 242, 247, 0.3) !important;
}
.report-body .fg-gray-9--4 {
  color: rgba(239, 242, 247, 0.4) !important;
}
.report-body .bg-gray-9--4 {
  background-color: rgba(239, 242, 247, 0.4) !important;
}
.report-body .border-gray-9--4 {
  border-color: rgba(239, 242, 247, 0.4) !important;
}
.report-body .fg-gray-9--5 {
  color: rgba(239, 242, 247, 0.5) !important;
}
.report-body .bg-gray-9--5 {
  background-color: rgba(239, 242, 247, 0.5) !important;
}
.report-body .border-gray-9--5 {
  border-color: rgba(239, 242, 247, 0.5) !important;
}
.report-body .fg-gray-9--6 {
  color: rgba(239, 242, 247, 0.6) !important;
}
.report-body .bg-gray-9--6 {
  background-color: rgba(239, 242, 247, 0.6) !important;
}
.report-body .border-gray-9--6 {
  border-color: rgba(239, 242, 247, 0.6) !important;
}
.report-body .fg-gray-9--7 {
  color: rgba(239, 242, 247, 0.7) !important;
}
.report-body .bg-gray-9--7 {
  background-color: rgba(239, 242, 247, 0.7) !important;
}
.report-body .border-gray-9--7 {
  border-color: rgba(239, 242, 247, 0.7) !important;
}
.report-body .fg-gray-9--8 {
  color: rgba(239, 242, 247, 0.8) !important;
}
.report-body .bg-gray-9--8 {
  background-color: rgba(239, 242, 247, 0.8) !important;
}
.report-body .border-gray-9--8 {
  border-color: rgba(239, 242, 247, 0.8) !important;
}
.report-body .fg-gray-9--9 {
  color: rgba(239, 242, 247, 0.9) !important;
}
.report-body .bg-gray-9--9 {
  background-color: rgba(239, 242, 247, 0.9) !important;
}
.report-body .border-gray-9--9 {
  border-color: rgba(239, 242, 247, 0.9) !important;
}
.report-body .fg-gray-10 {
  color: #F9FAFC !important;
}
.report-body .bg-gray-10 {
  background-color: #F9FAFC !important;
}
.report-body .border-gray-10 {
  border-color: #F9FAFC !important;
}
.report-body .fg-gray-10--025 {
  color: rgba(249, 250, 252, 0.025) !important;
}
.report-body .bg-gray-10--025 {
  background-color: rgba(249, 250, 252, 0.025) !important;
}
.report-body .border-gray-10--025 {
  border-color: rgba(249, 250, 252, 0.025) !important;
}
.report-body .fg-gray-10--05 {
  color: rgba(249, 250, 252, 0.05) !important;
}
.report-body .bg-gray-10--05 {
  background-color: rgba(249, 250, 252, 0.05) !important;
}
.report-body .border-gray-10--05 {
  border-color: rgba(249, 250, 252, 0.05) !important;
}
.report-body .fg-gray-10--1 {
  color: rgba(249, 250, 252, 0.1) !important;
}
.report-body .bg-gray-10--1 {
  background-color: rgba(249, 250, 252, 0.1) !important;
}
.report-body .border-gray-10--1 {
  border-color: rgba(249, 250, 252, 0.1) !important;
}
.report-body .fg-gray-10--2 {
  color: rgba(249, 250, 252, 0.2) !important;
}
.report-body .bg-gray-10--2 {
  background-color: rgba(249, 250, 252, 0.2) !important;
}
.report-body .border-gray-10--2 {
  border-color: rgba(249, 250, 252, 0.2) !important;
}
.report-body .fg-gray-10--3 {
  color: rgba(249, 250, 252, 0.3) !important;
}
.report-body .bg-gray-10--3 {
  background-color: rgba(249, 250, 252, 0.3) !important;
}
.report-body .border-gray-10--3 {
  border-color: rgba(249, 250, 252, 0.3) !important;
}
.report-body .fg-gray-10--4 {
  color: rgba(249, 250, 252, 0.4) !important;
}
.report-body .bg-gray-10--4 {
  background-color: rgba(249, 250, 252, 0.4) !important;
}
.report-body .border-gray-10--4 {
  border-color: rgba(249, 250, 252, 0.4) !important;
}
.report-body .fg-gray-10--5 {
  color: rgba(249, 250, 252, 0.5) !important;
}
.report-body .bg-gray-10--5 {
  background-color: rgba(249, 250, 252, 0.5) !important;
}
.report-body .border-gray-10--5 {
  border-color: rgba(249, 250, 252, 0.5) !important;
}
.report-body .fg-gray-10--6 {
  color: rgba(249, 250, 252, 0.6) !important;
}
.report-body .bg-gray-10--6 {
  background-color: rgba(249, 250, 252, 0.6) !important;
}
.report-body .border-gray-10--6 {
  border-color: rgba(249, 250, 252, 0.6) !important;
}
.report-body .fg-gray-10--7 {
  color: rgba(249, 250, 252, 0.7) !important;
}
.report-body .bg-gray-10--7 {
  background-color: rgba(249, 250, 252, 0.7) !important;
}
.report-body .border-gray-10--7 {
  border-color: rgba(249, 250, 252, 0.7) !important;
}
.report-body .fg-gray-10--8 {
  color: rgba(249, 250, 252, 0.8) !important;
}
.report-body .bg-gray-10--8 {
  background-color: rgba(249, 250, 252, 0.8) !important;
}
.report-body .border-gray-10--8 {
  border-color: rgba(249, 250, 252, 0.8) !important;
}
.report-body .fg-gray-10--9 {
  color: rgba(249, 250, 252, 0.9) !important;
}
.report-body .bg-gray-10--9 {
  background-color: rgba(249, 250, 252, 0.9) !important;
}
.report-body .border-gray-10--9 {
  border-color: rgba(249, 250, 252, 0.9) !important;
}
.report-body .pl--5 {
  padding-left: 5%;
}
.report-body .pr--5 {
  padding-right: 5%;
}
.report-body .pt--5 {
  padding-top: 5%;
}
.report-body .pb--5 {
  padding-bottom: 5%;
}
.report-body .ph--5 {
  padding-left: 5%;
  padding-right: 5%;
}
.report-body .pv--5 {
  padding-top: 5%;
  padding-bottom: 5%;
}
.report-body .pl--10 {
  padding-left: 10%;
}
.report-body .pr--10 {
  padding-right: 10%;
}
.report-body .pt--10 {
  padding-top: 10%;
}
.report-body .pb--10 {
  padding-bottom: 10%;
}
.report-body .ph--10 {
  padding-left: 10%;
  padding-right: 10%;
}
.report-body .pv--10 {
  padding-top: 10%;
  padding-bottom: 10%;
}
.report-body .pl--20 {
  padding-left: 20%;
}
.report-body .pr--20 {
  padding-right: 20%;
}
.report-body .pt--20 {
  padding-top: 20%;
}
.report-body .pb--20 {
  padding-bottom: 20%;
}
.report-body .ph--20 {
  padding-left: 20%;
  padding-right: 20%;
}
.report-body .pv--20 {
  padding-top: 20%;
  padding-bottom: 20%;
}
.report-body .pl--30 {
  padding-left: 30%;
}
.report-body .pr--30 {
  padding-right: 30%;
}
.report-body .pt--30 {
  padding-top: 30%;
}
.report-body .pb--30 {
  padding-bottom: 30%;
}
.report-body .ph--30 {
  padding-left: 30%;
  padding-right: 30%;
}
.report-body .pv--30 {
  padding-top: 30%;
  padding-bottom: 30%;
}
.report-body .pl--40 {
  padding-left: 40%;
}
.report-body .pr--40 {
  padding-right: 40%;
}
.report-body .pt--40 {
  padding-top: 40%;
}
.report-body .pb--40 {
  padding-bottom: 40%;
}
.report-body .ph--40 {
  padding-left: 40%;
  padding-right: 40%;
}
.report-body .pv--40 {
  padding-top: 40%;
  padding-bottom: 40%;
}
.report-body .pl--50 {
  padding-left: 50%;
}
.report-body .pr--50 {
  padding-right: 50%;
}
.report-body .pt--50 {
  padding-top: 50%;
}
.report-body .pb--50 {
  padding-bottom: 50%;
}
.report-body .ph--50 {
  padding-left: 50%;
  padding-right: 50%;
}
.report-body .pv--50 {
  padding-top: 50%;
  padding-bottom: 50%;
}
.report-body .pl--60 {
  padding-left: 60%;
}
.report-body .pr--60 {
  padding-right: 60%;
}
.report-body .pt--60 {
  padding-top: 60%;
}
.report-body .pb--60 {
  padding-bottom: 60%;
}
.report-body .ph--60 {
  padding-left: 60%;
  padding-right: 60%;
}
.report-body .pv--60 {
  padding-top: 60%;
  padding-bottom: 60%;
}
.report-body .pl--70 {
  padding-left: 70%;
}
.report-body .pr--70 {
  padding-right: 70%;
}
.report-body .pt--70 {
  padding-top: 70%;
}
.report-body .pb--70 {
  padding-bottom: 70%;
}
.report-body .ph--70 {
  padding-left: 70%;
  padding-right: 70%;
}
.report-body .pv--70 {
  padding-top: 70%;
  padding-bottom: 70%;
}
.report-body .pl--80 {
  padding-left: 80%;
}
.report-body .pr--80 {
  padding-right: 80%;
}
.report-body .pt--80 {
  padding-top: 80%;
}
.report-body .pb--80 {
  padding-bottom: 80%;
}
.report-body .ph--80 {
  padding-left: 80%;
  padding-right: 80%;
}
.report-body .pv--80 {
  padding-top: 80%;
  padding-bottom: 80%;
}
.report-body .pl--90 {
  padding-left: 90%;
}
.report-body .pr--90 {
  padding-right: 90%;
}
.report-body .pt--90 {
  padding-top: 90%;
}
.report-body .pb--90 {
  padding-bottom: 90%;
}
.report-body .ph--90 {
  padding-left: 90%;
  padding-right: 90%;
}
.report-body .pv--90 {
  padding-top: 90%;
  padding-bottom: 90%;
}
.report-body .pl--100 {
  padding-left: 100%;
}
.report-body .pr--100 {
  padding-right: 100%;
}
.report-body .pt--100 {
  padding-top: 100%;
}
.report-body .pb--100 {
  padding-bottom: 100%;
}
.report-body .ph--100 {
  padding-left: 100%;
  padding-right: 100%;
}
.report-body .pv--100 {
  padding-top: 100%;
  padding-bottom: 100%;
}
.report-body .o-hidden {
  overflow: hidden;
}
.report-body .tall {
  height: 200%;
}
.report-body .f-small {
  font-size: .50rem;
}

/*
* CGW Reset
*/
@media screen, print {
  body {
    background: initial;
    font-family: initial;
    color: initial;
    background: initial;
    background-color: initial;
  }

  body, p, td, th {
    line-height: initial;
    font-family: initial;
    font-size: initial;
    color: initial;
  }

  h1, h2, h3, h4, h5, h6 {
    margin: none;
    color: initial;
  }

  p {
    padding: inherit;
  }

  a, a:focus, a:hover {
    outline: initial;
    text-decoration: initial;
    cursor: initial;
    color: initial;
  }

  ol, ul, li {
    margin: initial;
    padding: initial;
    border: initial;
    font: initial;
    vertical-align: initial;
    font-size: initial;
    font-family: initial;
  }

  ol, ul {
    list-style: initial;
  }

  table {
    margin-bottom: initial;
    border-collapse: initial;
    border-spacing: initial;
    width: initial;
  }

  td {
    padding-left: initial;
  }

  .label {
    text-align: initial;
    font-weight: initial;
  }

  .row {
    margin-left: initial;
  }

  .report-body {
    width: initial;
    border-collapse: initial;
    border: initial;
    font-size: unset;
    border: initial;
    border-right: initial;
    border-left: initial;
    padding: initial;
  }
}
html, body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: 'Source Sans Pro', sans-serif !important;
  font-size: 16px;
  margin: 1rem;
  color: #1F2D3D;
  line-height: 1.3;
  overflow-y: auto;
}
html .report-body, body .report-body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: 'Source Sans Pro', sans-serif !important;
  font-size: 16px;
  color: #1F2D3D;
  line-height: 1.3;
}
html .report-body a[href],
html .report-body a[href]:visited,
html .report-body a[href]:active, body .report-body a[href],
body .report-body a[href]:visited,
body .report-body a[href]:active {
  text-decoration: none;
  color: #3788EC;
}
html .report-body p, html .report-body td, html .report-body th, html .report-body div, html .report-body span, body .report-body p, body .report-body td, body .report-body th, body .report-body div, body .report-body span {
  font-family: 'Source Sans Pro', sans-serif !important;
  font-size: 16px;
  color: #1F2D3D;
  line-height: 1.3;
}
html .report-body thead, html .report-body tbody,
html .report-body tfoot, body .report-body thead, body .report-body tbody,
body .report-body tfoot {
  vertical-align: middle;
}
html .report-body td, html .report-body th, html .report-body tr, body .report-body td, body .report-body th, body .report-body tr {
  vertical-align: inherit;
}
html .report-body td, body .report-body td {
  text-align: inherit;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  vertical-align: inherit;
  padding: inherit;
}
html .report-body th, body .report-body th {
  background: none;
  color: inherit;
  font-size: inherit;
  font-weight: inherit;
  line-height: inherit;
  padding: inherit;
  border-bottom: inherit;
}

.report-body .muted {
  color: #8492A6 !important;
}
.report-body h1, .report-body h2, .report-body h3, .report-body h4, .report-body h5, .report-body h6,
.report-body .h1, .report-body .h2, .report-body .h3, .report-body .h4, .report-body .h5, .report-body .h6 {
  font-family: 'Maven Pro', 'Helvetica Nue', Helvetica, sans-serif;
  font-weight: 700;
  margin-bottom: 1rem;
}
.report-body ul.list {
  list-style-type: none;
  list-style-position: inside;
  margin-bottom: 1rem;
  padding-left: 0;
  -webkit-margin-before: .5rem;
          margin-block-start: .5rem;
  -webkit-margin-after: .5rem;
          margin-block-end: .5rem;
}
.report-body ul.list li {
  margin-left: 1rem;
}
.report-body ul.list > li::before {
  content: "\2014";
  margin-left: -1.1rem;
  padding-right: 4px;
}
.report-body .table {
  width: 100%;
  margin-bottom: 1.5rem;
}
.report-body .table > thead tr {
  border-bottom: 1px solid #D3DCE6;
}
.report-body .table > thead tr th {
  text-transform: uppercase;
  font-size: .9rem;
  color: #8492A6;
  font-weight: 400;
  padding: .5rem;
}
.report-body .table > tbody tr {
  border-bottom: 1px solid rgba(211, 220, 230, 0.25);
}
.report-body .table > tbody td {
  vertical-align: top;
  padding: .5rem;
}
.report-body .ml1-neg {
  margin-left: -.5rem;
}
.report-body .mr1-neg {
  margin-right: -.5rem;
}
.report-body .table-auto {
  table-layout: auto;
}
.report-body .status-box {
  height: 4.5rem !important;
  min-width: 4.5rem;
  max-height: 4.5rem !important;
  border-radius: .25rem;
  margin: 0px .25rem;
}
.report-body .status-box + .status-box {
  margin-left: .5rem;
}
.report-body .status-box > .content {
  padding: 0px 1rem;
  height: 100%;
}
.report-body .abs-center {
  display: inline-table;
  height: 100%;
}
.report-body .abs-center > .content {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}

.report-body .col {
  width: 100%;
  margin-bottom: 2em;
}
.report-body .row {
  display: flex;
  width: calc(100% + 0.5rem );
  margin-left: -0.25rem;
}
.report-body .col {
  padding: 0 0.25rem;
  margin-bottom: 0;
}
.report-body .row.flush > .col:first-child {
  margin-left: -0.25rem;
}
.report-body .row.flush > .col:last-child {
  margin-right: -0.25rem;
}
.report-body .col-1 {
  width: 8.3333333333%;
}
.report-body .col-2 {
  width: 16.6666666667%;
}
.report-body .col-3 {
  width: 25%;
}
.report-body .col-4 {
  width: 33.3333333333%;
}
.report-body .col-5 {
  width: 41.6666666667%;
}
.report-body .col-6 {
  width: 50%;
}
.report-body .col-7 {
  width: 58.3333333333%;
}
.report-body .col-8 {
  width: 66.6666666667%;
}
.report-body .col-9 {
  width: 75%;
}
.report-body .col-10 {
  width: 83.3333333333%;
}
.report-body .col-11 {
  width: 91.6666666667%;
}
.report-body .col-12 {
  width: 100%;
}

.report-body .br0--top-left {
  border-top-left-radius: 0;
}
.report-body .br0--top-right {
  border-top-right-radius: 0;
}
.report-body .br0--bottom-left {
  border-bottom-left-radius: 0;
}
.report-body .br0--bottom-right {
  border-bottom-right-radius: 0;
}
.report-body .br0--top {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.report-body .br0--bottom {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.report-body .br0--left {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.report-body .br0--right {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.report-body .br1--top-left {
  border-top-left-radius: 0.125rem;
}
.report-body .br1--top-right {
  border-top-right-radius: 0.125rem;
}
.report-body .br1--bottom-left {
  border-bottom-left-radius: 0.125rem;
}
.report-body .br1--bottom-right {
  border-bottom-right-radius: 0.125rem;
}
.report-body .br1--top {
  border-top-left-radius: 0.125rem;
  border-top-right-radius: 0.125rem;
}
.report-body .br1--bottom {
  border-bottom-left-radius: 0.125rem;
  border-bottom-right-radius: 0.125rem;
}
.report-body .br1--left {
  border-bottom-left-radius: 0.125rem;
  border-top-left-radius: 0.125rem;
}
.report-body .br1--right {
  border-top-right-radius: 0.125rem;
  border-bottom-right-radius: 0.125rem;
}
.report-body .br2--top-left {
  border-top-left-radius: 0.25rem;
}
.report-body .br2--top-right {
  border-top-right-radius: 0.25rem;
}
.report-body .br2--bottom-left {
  border-bottom-left-radius: 0.25rem;
}
.report-body .br2--bottom-right {
  border-bottom-right-radius: 0.25rem;
}
.report-body .br2--top {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.report-body .br2--bottom {
  border-bottom-left-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}
.report-body .br2--left {
  border-bottom-left-radius: 0.25rem;
  border-top-left-radius: 0.25rem;
}
.report-body .br2--right {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}
.report-body .br3--top-left {
  border-top-left-radius: 0.5rem;
}
.report-body .br3--top-right {
  border-top-right-radius: 0.5rem;
}
.report-body .br3--bottom-left {
  border-bottom-left-radius: 0.5rem;
}
.report-body .br3--bottom-right {
  border-bottom-right-radius: 0.5rem;
}
.report-body .br3--top {
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}
.report-body .br3--bottom {
  border-bottom-left-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}
.report-body .br3--left {
  border-bottom-left-radius: 0.5rem;
  border-top-left-radius: 0.5rem;
}
.report-body .br3--right {
  border-top-right-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}
.report-body .br4--top-left {
  border-top-left-radius: 1rem;
}
.report-body .br4--top-right {
  border-top-right-radius: 1rem;
}
.report-body .br4--bottom-left {
  border-bottom-left-radius: 1rem;
}
.report-body .br4--bottom-right {
  border-bottom-right-radius: 1rem;
}
.report-body .br4--top {
  border-top-left-radius: 1rem;
  border-top-right-radius: 1rem;
}
.report-body .br4--bottom {
  border-bottom-left-radius: 1rem;
  border-bottom-right-radius: 1rem;
}
.report-body .br4--left {
  border-bottom-left-radius: 1rem;
  border-top-left-radius: 1rem;
}
.report-body .br4--right {
  border-top-right-radius: 1rem;
  border-bottom-right-radius: 1rem;
}

.report-body .section {
  margin-bottom: 2rem;
  padding-left: .5rem;
  padding-right: .5rem;
}
.report-body .section__header {
  font-family: 'Maven Pro', sans-serif !important;
  text-transform: uppercase;
  padding: .5rem;
  margin-bottom: .75rem;
  font-weight: 600 !important;
  margin-left: -.5rem;
  margin-right: -.5rem;
}
.report-body .section .full-section-width {
  margin-left: -.5rem;
  margin-right: -.5rem;
}

.report-body section#relevant-results .section__header {
  color: #fff;
  background-color: #A8026F;
}
.report-body section#genomic-findings .section__header {
  color: #fff;
  background-color: #A8026F;
}
.report-body section#patient-order-details .section__header {
  color: #fff;
  background-color: #A2AFC0;
  margin-bottom: 0;
}
.report-body section#clinical-trials .section__header {
  color: #fff;
  background-color: #ff7849;
}
.report-body section#uncertain-variants .section__header {
  color: #fff;
  background-color: #0D4D70;
}
.report-body section#classification-levels .section__header,
.report-body section#test-details .section__header,
.report-body section#disclaimer .section__header,
.report-body section#methodology .section__header {
  color: #fff;
  background-color: #A2AFC0;
}

.report-body .stack {
  display: flex;
  flex-direction: column;
  align-items: left;
}
.report-body .stack__item {
  display: inline-block;
}
.report-body .stack__item > .label {
  margin-top: 1rem;
  margin-bottom: 1rem;
}
.report-body .stack__item.title {
  font-size: 1rem;
  font-weight: 600;
  margin-bottom: .5rem;
}
.report-body .stack__item.subtitle {
  font-size: .9rem;
}
.report-body .stack__item.meta {
  font-size: .9rem;
  color: #8492A6;
}

.report-body .label {
  align-items: center;
  background-color: #f5f5f5;
  border-radius: 4px;
  color: #4a4a4a;
  display: inline-flex;
  font-size: 1rem;
  font-weight: 600;
  height: 1.5em;
  min-width: 2rem;
  justify-content: center;
  line-height: 1.5;
  padding-left: .75em;
  padding-right: .75em;
  white-space: nowrap;
}

.report-body .status {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  vertical-align: top;
  background-color: #f5f5f5;
  border-radius: 4px;
  color: #4a4a4a;
  font-size: 1rem;
  height: 4rem;
  min-width: 4rem;
  max-height: 4rem;
  min-height: 4rem;
}
.report-body .status__value {
  display: block;
  padding: 0px 0.5rem;
  font-size: 1.5rem;
  font-weight: 500;
}
.report-body .status__description, .report-body .status__descrip {
  display: block;
  font-size: 1rem;
  font-weight: normal;
}

.status-group {
  display: flex;
}

.is-level-A {
  color: #1F2D3D !important;
  background-color: rgba(243, 94, 109, 0.25) !important;
}

.is-level-B {
  color: #1F2D3D !important;
  background-color: rgba(211, 85, 137, 0.25) !important;
}

.is-level-C {
  color: #1F2D3D !important;
  background-color: rgba(166, 86, 153, 0.25) !important;
}

.is-level-D {
  color: #1F2D3D !important;
  background-color: rgba(113, 88, 154, 0.25) !important;
}

.is-tmb {
  color: #1F2D3D !important;
  background-color: rgba(26, 157, 167, 0.25) !important;
}

.is-msi {
  color: #1F2D3D !important;
  background-color: rgba(71, 152, 182, 0.25) !important;
}

.is-clinical-trials {
  color: #1F2D3D !important;
  background-color: rgba(255, 120, 73, 0.25) !important;
}

.report-body .client-address > .address {
  font-style: normal;
  font-size: .85rem;
  padding-bottom: .5rem;
  margin-right: calc(60px + 1.125rem);
}
.report-body .powered-by > img {
  margin-top: -.125rem;
  padding-left: .25rem;
}

.page-heading,
.page-footer {
  display: none;
}

@media print {
  body, body.report-body {
    font-size: .75rem;
    color: inherit;
    font-family: 'Source Sans Pro', sans-serif !important;
    margin: 1rem;
    color: #1F2D3D !important;
    line-height: 1.3;
    overflow-y: auto;
  }

  h1, h2, .section__header {
    page-break-after: avoid;
    -webkit-column-break-after: avoid;
            break-after: avoid;
  }

  h2 {
    font-weight: 500;
  }

  p {
    page-break-inside: always;
    -webkit-column-break-inside: always;
            break-inside: always;
  }

  .list {
    page-break-inside: avoid;
    -webkit-column-break-inside: avoid;
            break-inside: avoid;
  }

  .powered-by {
    margin-top: -1rem;
  }

  div.classification-table {
    page-break-inside: avoid;
    -webkit-column-break-inside: avoid;
            break-inside: avoid;
  }

  .report-heading {
    position: running(header);
  }

  .page-heading {
    display: block;
    page-break-inside: avoid;
    -webkit-column-break-inside: avoid;
            break-inside: avoid;
    position: running(heading);
  }

  .page-footer {
    display: block;
    page-break-inside: avoid;
    -webkit-column-break-inside: avoid;
            break-inside: avoid;
    position: running(footer);
    height: 0.7in;
  }
}
@page {
  margin-top: 1.5in;
  margin-bottom: 0.8in;
  margin-left: 0.15in;
  margin-right: 0.15in;
  size: A4;
  @top-center {
    content: -moz-element(heading);
    content: element(heading);
  }
  @bottom-right {
    content: none;
  }
  @bottom-center {
    content: -moz-element(footer);
    content: element(footer);
  }
}
@page :first {
  margin-top: 1.5in;
  @top-center {
    content: -moz-element(header);
    content: element(header);
  }
}

</style>
<script>

</script>
</body>
</html>